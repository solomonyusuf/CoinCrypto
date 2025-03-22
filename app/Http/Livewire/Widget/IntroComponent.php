<?php

namespace App\Http\Livewire\Widget;

use App\Models\AppVideo;
use App\Models\Article;
use Livewire\Component;

class IntroComponent extends Component
{
    public function render()
    {
        $latest = Article::where(['visible'=> true])->orderByDesc('created_at')
            ->first();

        $video = AppVideo::where(['visible'=> true])->orderByDesc('created_at')
             ->first();
        return view('livewire.widget.intro-component',[
            'video'=> $video,
            'latest'=> $latest,
        ]);
    }
}
