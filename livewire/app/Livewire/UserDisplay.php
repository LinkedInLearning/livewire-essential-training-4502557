<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDisplay extends Component
{

    public User $user;

    public function render()
    {
        return view('livewire.user-display',
            ['user' => User::find($this->user->id)] 
        );
    }

    public function delete()
    {
        $this->user->delete();
        $this->dispatch('delete-user');
    }   
}
