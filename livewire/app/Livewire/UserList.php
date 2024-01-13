<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $query = '';

    public function search() {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user-list',
            ['users' => 
            \App\Models\User::where('name', 'like', '%' . $this->query . '%')->paginate(10, pageName: 'users-list' ) ]);
    }
}
