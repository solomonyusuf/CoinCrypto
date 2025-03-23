<?php

namespace App\Http\Livewire;

use App\Models\VideoCategory;
use App\Models\Event;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Navmenu extends Component
{
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
        $event = Event::where('event_date', '>', Carbon::now())
                    ->orderBy('event_date', 'asc')  
                    ->first();
                    
       $events = Event::where('event_date', '>', Carbon::now())
                    ->orderBy('event_date', 'asc')  
                    ->get();


        $video_category = VideoCategory::get();
        return view('livewire.navmenu',[
            'video_category'=> $video_category,
            'event'=> $event,
            'events'=> $events,
        ]);
    }
}
