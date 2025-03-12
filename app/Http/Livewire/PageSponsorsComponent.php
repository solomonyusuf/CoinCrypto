<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class PageSponsorsComponent extends Component
{
    public function render()
    {
        $articles = Article::orderByDesc('created_at')
        ->where(['sponsored'=> true])
        ->paginate(20);
        
        return view('livewire.page-sponsors-component', [
            'articles'=> $articles
        ]);
    }
}
