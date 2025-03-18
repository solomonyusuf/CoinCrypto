<?php

namespace App\Http\Livewire;

use App\Models\AppVideo;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Newsletter;
use Carbon\Carbon;
use Livewire\Component;

class HomeComponent extends Component
{
    public int $count = 0;

    public function detail($slug, $id)
    {

    }
    public function render()
    {
        $latest = Article::where(['visible'=> true])->orderByDesc('created_at')
                            ->first();
        
        $video = AppVideo::where(['visible'=> true])->orderByDesc('created_at')
                            ->first();
                            
       $latests = Article::where(['visible'=> true])->orderByDesc('created_at')
                            ->whereDate('created_at', '=', Carbon::now())
                            ->limit(5)
                            ->get();
                            
        $top = Article::where(['visible'=> true])->orderByDesc('created_at')->paginate(30);
        $articles = Article::where(['visible'=> true])->orderBy('views', 'desc')->paginate(30);
        
        $categories =  ArticleCategory::orderByDesc('created_at')
                           ->limit(5)
                           ->get();

        $newsletters = Newsletter::orderByDesc('created_at')->get();
        

        return view('livewire.home-component',[
            'video'=> $video,
            'latest'=> $latest,
            'latests'=> $latests,
            'articles'=> $articles,
            'top'=> $top,
            'newsletters'=> $newsletters,
            'categories'=> $categories,
        ]);
    }
}
