<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\ArticleCategory;
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
        $latests = Article::where(['visible'=> true])->orderByDesc('created_at')
                            ->whereDate('created_at', '=', Carbon::now())
                            ->limit(5)
                            ->get();
                            
        $top = Article::where(['visible'=> true])->orderBy('views', 'desc')->take(6)->get();;
        $articles = Article::where(['visible'=> true])->orderByDesc('created_at')->paginate(20);
        
        $categories =  ArticleCategory::orderByDesc('created_at')
                           ->get();

        return view('livewire.home-component',[
            'latests'=> $latests,
            'articles'=> $articles,
            'top'=> $top,
            'categories'=> $categories,
        ]);
    }
}
