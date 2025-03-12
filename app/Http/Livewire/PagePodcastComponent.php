<?php

namespace App\Http\Livewire;

use App\Models\Podcast;
use Livewire\Component;

class PagePodcastComponent extends Component
{
   
    public $podcast;

    public function play($id)
    {
        $this->podcast = Podcast::find($id);
    }
    public function render()
    {
        $podcasts = Podcast::orderByDesc('created_at')->paginate(20);

        return view('livewire.page-podcast-component',[
            'podcasts'=> $podcasts
        ]);
    }
}
