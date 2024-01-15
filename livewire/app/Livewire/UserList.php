<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[Validate]
    public string $query = '';

    public int $numberOfUsers = 10;

    public function search() {
        $this->resetPage();
    }

    public function rules()
    {
        return [
            'query' => 'alpha',
        ];
    }

    #[On('delete-user')]
    public function render()
    {
        $query = $this->query;

        if (!empty($this->getErrorBag()->get('query'))) {
            $query = '';
        }

        $numberOfUsers = (int) $this->numberOfUsers;

        return view('livewire.user-list',
            ['users' => 
            \App\Models\User::where('name', 'like', '%' . $query . '%')->paginate($numberOfUsers, pageName: 'users-list' ) ,
        ]);
    }
}
