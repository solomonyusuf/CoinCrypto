<?php

namespace App\Http\Livewire;

use App\Models\AppVideo;
use Livewire\Component;

class PageVideoComponent extends Component
{
    public function render()
    {
        $videos = AppVideo::where(['visible'=> true])->orderByDesc('created_at')->get();
        
        return view('livewire.page-video-component',[
            'videos'=> $videos
        ]);
    }
}
