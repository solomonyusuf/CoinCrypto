<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class VideosComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.videos-component')
        ->layout('layouts.admin');
    }
}
