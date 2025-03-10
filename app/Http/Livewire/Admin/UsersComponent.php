<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class UsersComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.users-component')
        ->layout('layouts.admin');
    }
}
