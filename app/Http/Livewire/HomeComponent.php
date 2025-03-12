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
        $latests = Article::orderByDesc('created_at')
                            ->whereDate('created_at', '=', Carbon::now())
                            ->get();
        $top = Article::orderBy('views', 'desc')->take(6)->get();;
        $articles = Article::orderByDesc('created_at')->paginate(20);
        $crypto =  Article::orderByDesc('created_at')
                           ->where(['category_id'=> ArticleCategory::where(['title'=> 'crypto'])->first()?->id])
                           ->take(10)
                           ->get();

        return view('livewire.home-component',[
            'latests'=> $latests,
            'articles'=> $articles,
            'top'=> $top,
            'crypto'=> $crypto,
        ]);
    }
}
