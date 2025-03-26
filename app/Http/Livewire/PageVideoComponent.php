<?php

namespace App\Http\Livewire;

use App\Models\AppSetting;
use App\Models\AppVideo;
use App\Models\VideoCategory;
use Livewire\Component;

class PageVideoComponent extends Component
{
    public $video_id;
    public $paginate = false;
    public $advert = true;

    public function togglePaginate()
    {
        $this->paginate = !$this->paginate;
    }
    public function mount($video_id)
    {
        $this->video_id = $video_id;
    }
    public function render()
    {
       $this->advert = AppSetting::first()->advert;
        $category = VideoCategory::find($this->video_id);
        $top = AppVideo::orderByDesc('created_at')
                ->where('category_id', $category->id)
                ->take(10) 
                ->get();   

        $videos = AppVideo::orderByDesc('created_at')
            ->where(['visible'=> true])    
            ->where('category_id', $category->id)
            ->skip(10) 
            ->paginate(4);

        return view('livewire.page-video-component',[
            'category'=> $category,
            'top'=> $top,
            'videos'=> $videos,
             
        ]);
    }
}
