<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ArticleTagComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.article-tag-component')
        ->layout('layouts.admin');
    }
}
