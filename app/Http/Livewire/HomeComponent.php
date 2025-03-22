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
    public int $num = 2;
    public $transition = '';
    public bool $show = true;

    public function showTransition($param)
    {
        $this->transition = $param;
    }
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
                            
        $articles = Article::where(['visible'=> true])->orderBy('views', 'desc')->limit(30)->get();

        $categories =  ArticleCategory::get();

        $excludedTitles = ['Press release', 'Crypto', 'Opinion'];

        $categories_display = ArticleCategory::whereNotIn('title', $excludedTitles)->get();

        $newsletters = Newsletter::orderByDesc('created_at')->limit(6)->get();
       
        $podcasts = Podcast::orderByDesc('created_at')->limit(6)->get();
        
        $event = Event::where('event_date', '>', Carbon::now())
                    ->orderBy('event_date', 'asc')  
                    ->first();

         $countdownSeconds = $event ? Carbon::parse($event->event_date)->diffInSeconds(Carbon::now()) : 0;
        
         $top = Article::where(['visible'=> true])->orderByDesc('created_at')->limit(12)->get();
      
        return view('livewire.home-component',[
            'video'=> $video,
            'latest'=> $latest,
            'latests'=> $latests,
            'articles'=> $articles,
            'podcasts'=> $podcasts,
            'event'=> $event,
            'top'=> $top,
            'countdownSeconds'=> $countdownSeconds,
            'newsletters'=> $newsletters,
            'categories'=> $categories,
            'breakdown'=> $categories_display,
        ]);
    }
}
