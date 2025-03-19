<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class PageEventComponent extends Component
{
    public $count = 0;
    public function render()
    {
        $events = Event::orderByDesc('created_at')->get();
        return view('livewire.page-event-component', [
            'events'=> $events
        ]);
    }
}
