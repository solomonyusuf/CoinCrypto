<?php

namespace App\Http\Livewire;

use App\Models\AppSetting;
use App\Models\AppVideo;
use App\Models\Article;
use App\Models\Event;
use Illuminate\Support\Carbon;
use Livewire\Component;

class PageSponsorsComponent extends Component
{

    public function render()
    {
        $articles = Article::where(['visible'=> true])
                        ->orderByDesc('created_at')
                        ->paginate(10);

        $groupedArticles = $articles->groupBy(function ($article) {
            return Carbon::parse($article->created_at)->format('M d');
        });

        
        return view('livewire.page-sponsors-component', [
            'articles'=> $articles,
            'groupedArticles'=> $groupedArticles,
            'setting' => AppSetting::first()
            
        ]);
    }
}
