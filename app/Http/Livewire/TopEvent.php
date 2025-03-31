<?php

namespace App\Http\Livewire;

use App\Models\AppSetting;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Event;

class TopEvent extends Component
{
    public bool $show = true;

    public function showEvent()
    {
        $this->show = $this->show ? false : true;
    }
    public function render()
    {
        $event = Event::where('event_date', '>', Carbon::now())
                    ->where('visible', '=', true)                     
                    ->orderBy('event_date', 'asc')  
                    ->first();

     $countdownSeconds = $event ? Carbon::parse($event->event_date)->diffInSeconds(Carbon::now()) : 0;
        

        return view('livewire.top-event', [
            'event'=> $event, 
            'setting'=> AppSetting::first(), 
        'countdownSeconds'=> $countdownSeconds]);
    }
}
