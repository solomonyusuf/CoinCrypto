<?php

namespace App\Http\Livewire;

use App\Models\AppSetting;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Newsletter;
use App\Models\PageLink;
use App\Models\Podcast;
use App\Models\VideoCategory;
use App\Models\Event;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Navmenu extends Component
{
    public $advert = true;
    public $openNav = false;
    public $openAvatar = false;

    public $urllate = 'default';

    public function selecturllate($item)
    {
        $this->urllate = $item;
        $this->openNav = true;
    } 
    public function toggleNav()
    {
        $this->openNav = !$this->openNav;
    }
    public function toggleAvatar()
    {
        $this->openAvatar = !$this->openAvatar;
    
    }
    public function render()
    {
        $setting = AppSetting::first();
        $setting->theme = 'black';

        $event = Event::where('event_date', '>', Carbon::now())
                    ->orderBy('event_date', 'asc')  
                    ->first();
                    
        $events = Event::where('event_date', '>', Carbon::now())
                    ->orderBy('event_date', 'asc')  
                    ->get();


        $video_category = VideoCategory::where(['active' => true])->get();
        
        $podcasts = Podcast::get();

        $newsletters = Newsletter::get();
        
        $excludedTitles = ['Press release', 'Crypto', 'Opinion'];

        $categories_display = ArticleCategory::whereNotIn('title', $excludedTitles)
                            ->with(['articles' => function ($query) {
                                $query->orderByDesc('created_at')->take(4);  
                            }])->get();

        $links = PageLink::get();

        return view('livewire.navmenu',[
            'video_category'=> $video_category,
            'event'=> $event,
            'events'=> $events,
            'podcasts'=> $podcasts,
            'newsletter'=> $newsletters,
            'setting'=> $setting,
            'links'=> $links,
            'categories'=> $categories_display,
        ]);
    }
}
