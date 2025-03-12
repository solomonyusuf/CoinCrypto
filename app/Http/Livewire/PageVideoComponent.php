<?php

namespace App\Http\Livewire;

use App\Models\AppVideo;
use Livewire\Component;

class PageVideoComponent extends Component
{
    public function render()
    {
        $videos = AppVideo::orderByDesc('created_at')->get();
        
        return view('livewire.page-video-component',[
            'videos'=> $videos
        ]);
    }
}
