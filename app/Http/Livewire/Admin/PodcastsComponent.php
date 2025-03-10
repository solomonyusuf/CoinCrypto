<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PodcastsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.podcasts-component')
        ->layout('layouts.admin');
    }
}
