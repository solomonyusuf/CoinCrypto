<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\AppSetting;
use App\Models\ArticleCategory;
use Illuminate\Support\Carbon;
use Livewire\Component;

class CategoryDetailComponent extends Component
{

    public $advert = true;
    public $category_id;

    public function mount($category_id)
    {
        $this->category_id = $category_id;
    }
    public function render()
    {
        $this->advert = AppSetting::first()->advert;
        $category = ArticleCategory::find($this->category_id);

        $categories = ArticleCategory::whereNotIn('title', [$category->title])->limit(2)->get();

        $top = Article::orderByDesc('created_at')
        ->where('category_id', $category->id)
        ->take(7) 
        ->get();

        $first = $top->first();

        $second = $top->skip(1)->take(2);

        $third = $top->skip(3)->take(4);

        $articles = Article::where(['category_id'=> $category->id])
                        ->orderByDesc('created_at')
                        ->skip(7)
                        ->paginate(10);

        $groupedArticles = $articles->groupBy(function ($article) {
            return Carbon::parse($article->created_at)->format('M d');
        });

        return view('livewire.category-detail-component',[
            'category'=> $category,
            'categories'=> $categories,
            'groupedArticles'=> $groupedArticles,
            'articles'=> $articles,
            'first'=> $first,
            'second'=> $second,
            'third'=> $third,
            'setting'=> AppSetting::first(),
        ]);
    }
}
