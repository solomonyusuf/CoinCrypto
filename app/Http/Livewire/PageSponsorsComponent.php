<?php

namespace App\Http\Livewire;

use App\Models\AppVideo;
use App\Models\Article;
use App\Models\Event;
use Livewire\Component;

class PageSponsorsComponent extends Component
{
    public function render()
    {
        $articles = Article::orderByDesc('created_at')
        ->where(['sponsored'=> true])
        ->paginate(20);

        $videos = AppVideo::orderByDesc('created_at')
        ->paginate(20);
        
        $events = Event::orderByDesc('created_at')
        ->paginate(2);
        
        return view('livewire.page-sponsors-component', [
            'articles'=> $articles,
            'videos'=> $videos,
            'events'=> $events,
        ]);
    }
}
