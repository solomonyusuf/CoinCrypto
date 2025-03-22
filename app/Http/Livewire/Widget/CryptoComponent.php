<?php

namespace App\Http\Livewire\Widget;

use App\Models\Article;
use App\Models\ArticleCategory;
use Livewire\Component;

class CryptoComponent extends Component
{
    public function render()
    {
        $category =  ArticleCategory::where('title', 'like', '%'.'crypto'.'%')
                        ->first();
        $list = Article::orderByDesc('created_at')->where([
            'category_id' => $category->id,
            'visible' => true,
        ])->limit(50)->get();

        return view('livewire.widget.crypto-component', [
            'crypto'=> $list,
        ]);
    }
}
