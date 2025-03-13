<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class PageEventComponent extends Component
{
    public function render()
    {
        $events = Event::where(['visible'=> true])->orderByDesc('created_at')->get();
        return view('livewire.page-event-component', [
            'events'=> $events
        ]);
    }
}
