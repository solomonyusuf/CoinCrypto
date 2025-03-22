<?php

namespace App\Http\Livewire;

use App\Models\AppVideo;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Newsletter;
use App\Models\Event;
use App\Models\Podcast;
use Carbon\Carbon;
 
use Livewire\Component;

class HomeComponent extends Component
{
    public int $count = 1;
    public bool $show = true;

    public function showEvent()
    {
        $this->show = $this->show ? false : true;
    }
    public function render()
    {
        $latest = Article::where(['visible'=> true])->orderByDesc('created_at')
                            ->first();
        
        $video = AppVideo::where(['visible'=> true])->orderByDesc('created_at')
                            ->first();
                            
       $latests = Article::where(['visible'=> true])->orderByDesc('created_at')
                            ->whereDate('created_at', '=', Carbon::now())
                            ->limit(5)
                            ->get();
                            
        $top = Article::where(['visible'=> true])->orderByDesc('created_at')->paginate(30);
        $articles = Article::where(['visible'=> true])->orderBy('views', 'desc')->limit(30)->get();
    

        $categories_body =  ArticleCategory::orderByDesc('created_at')
                            ->get();

        $newsletters = Newsletter::orderByDesc('created_at')->get();
       
        $podcasts = Podcast::orderByDesc('created_at')->limit(20)->get();
        
        $event = Event::where('event_date', '>', Carbon::now())
                    ->orderBy('event_date', 'asc')  
                    ->first();

         $countdownSeconds = $event ? Carbon::parse($event->event_date)->diffInSeconds(Carbon::now()) : 0;
        
 
        return view('livewire.home-component',[
            'video'=> $video,
            'latest'=> $latest,
            'latests'=> $latests,
            'articles'=> $articles,
            'top'=> $top,
            'podcasts'=> $podcasts,
            'event'=> $event,
            'countdownSeconds'=> $countdownSeconds,
            'newsletters'=> $newsletters,
            'categories_body'=> $categories_body,
        ]);
    }
}
