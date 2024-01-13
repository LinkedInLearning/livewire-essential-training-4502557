<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[Validate]
    public string $query = '';

    public function search() {
        $this->resetPage();
    }

    public function rules()
    {
        return [
            'query' => 'alpha',
        ];
    }

    public function render()
    {
        $query = $this->query;

        if (!empty($this->getErrorBag()->get('query'))) {
            $query = '';
        }

        return view('livewire.user-list',
            ['users' => 
            \App\Models\User::where('name', 'like', '%' . $query . '%')->paginate(10, pageName: 'users-list' ) ,
        ]);
    }
}
