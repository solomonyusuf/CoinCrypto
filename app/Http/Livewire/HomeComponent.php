<?php

namespace App\Http\Livewire;

use App\Models\AppSetting;
use App\Models\AppVideo;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Episode;
use App\Models\Newsletter;
use App\Models\Event;
use App\Models\Podcast;
use App\Models\User;
use Carbon\Carbon;
 
use Livewire\Component;

class HomeComponent extends Component
{
    public int $count = 1;
    public int $num = 2;
    public $transition = '';
    public bool $show = true;

    public function mount()
    {
        $role = User::find(auth()?->user()?->id)?->role;

        if($role?->title == 'superadmin') return redirect()->route('admin_home');
        
    }
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
        
        $setting = AppSetting::first();

        $latest = Article::find($setting?->top_left_article);
        
        $video = AppVideo::find($setting?->top_right_article);
                            
       
        $latests = Article::where(['visible'=> true])->orderByDesc('created_at')
                            ->whereDate('created_at', '=', Carbon::now())
                            ->limit(5)
                            ->get();
                            
        $articles = Article::where([
            'visible'=> true,
            'category_id'=> $setting?->third_section,
            ])->orderByDesc('created_at')->limit(30)->get();

        $categories =  ArticleCategory::where(['visible'=> true])->get();

        $excludedTitles = [ $setting?->second_right, $setting?->second_left, $setting?->third_section, $setting?->fourth_section, $setting?->fifth_section];

        $categories_display = ArticleCategory::whereNotIn('id', $excludedTitles)
                                                ->where(['visible'=> true])                       
                                                ->with('latestArticles')
                                                                        ->get();

   
        $newsletters = Newsletter::where(['visible'=> true])->orderByDesc('created_at')->limit(6)->get();
       
        $podcasts = Episode::where(['visible'=> true])->orderByDesc('created_at')->limit(9)->get();
        
        $event = Event::where('event_date', '>', Carbon::now())
                    ->where('visible', '=', true)
                    ->orderBy('event_date', 'asc')  
                    ->first();

         $countdownSeconds = $event ? Carbon::parse($event?->event_date)->diffInSeconds(Carbon::now()) : 0;
        
         $top_category = ArticleCategory::find($setting?->second_right);
 
         $top = Article::where([
            'visible'=> true,
            'category_id'=> $top_category?->id
            ])->orderByDesc('created_at')->limit(12)->get();
 
        return view('livewire.home-component',[
            'video'=> $video,
            'latest'=> $latest,
            'latests'=> $latests,
            'articles'=> $articles,
            'podcasts'=> $podcasts,
            'event'=> $event,
            'top_category'=> $top_category,
            'top'=> $top,
            'countdownSeconds'=> $countdownSeconds,
            'newsletters'=> $newsletters,
            'categories'=> $categories,
            'breakdown'=> $categories_display,
            'setting'=> $setting,
        ]);
    }
}
