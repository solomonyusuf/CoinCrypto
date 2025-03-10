<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class NewsletterComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.newsletter-component')
        ->layout('layouts.admin');
    }
}
