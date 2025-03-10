<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EventComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.event-component')
        ->layout('layouts.admin');
    }
}
