<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ArticleComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.article-component')
        ->layout('layouts.admin');
    }
}
