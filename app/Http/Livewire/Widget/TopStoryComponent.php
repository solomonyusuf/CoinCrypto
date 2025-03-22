<?php

namespace App\Http\Livewire\Widget;

use App\Models\Article;
use Livewire\Component;

class TopStoryComponent extends Component
{
      
    public function render()
    {
        $top = Article::where(['visible'=> true])->orderByDesc('created_at')->limit(12)->get();
      
        return view('livewire.widget.top-story-component',[
            'top'=> $top
        ]);
    }
}
