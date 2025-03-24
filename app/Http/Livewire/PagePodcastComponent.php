<?php

namespace App\Http\Livewire;

use App\Models\Episode;
use App\Models\Podcast;
use Livewire\Component;

class PagePodcastComponent extends Component
{

    public $podcast_id;

    public function mount($podcast_id)
    {
        $this->podcast_id = $podcast_id;
    }

    public $count = 0;

    public function play($id)
    {
     }
    public function render()
    {
        $podcast = Podcast::find($this->podcast_id);
   
        $podcasts =  Episode::orderByDesc('created_at')->
                    where(['podcast_id' => $podcast->id])->paginate(20);


        $first = Podcast::find($this->podcast_id)
                    ->with(['episodes' => function ($query) {
                        $query->orderByDesc('created_at')->take(1);  
                    }])->first();

        return view('livewire.page-podcast-component',[
            'podcasts'=> $podcasts,
            'first'=> $first,
            'podcast'=> $podcast,
        ]);
    }
}
