<?php

namespace App\Http\Livewire\Widget;

use App\Models\Article;
use App\Models\ArticleCategory;
use Livewire\Component;

class CryptoComponent extends Component
{
    public function render()
    {
        $setting = \App\Models\AppSetting::first();

        $category =  ArticleCategory::find($setting?->second_left);
        
        $list = Article::orderByDesc('created_at')->where([
            'category_id' => $category?->id,
            'visible' => true,
        ])->limit(50)->get();

        return view('livewire.widget.crypto-component', [
            'category'=> $category,
            'crypto'=> $list,
            'setting'=> $setting,
        ]);
    }
}
