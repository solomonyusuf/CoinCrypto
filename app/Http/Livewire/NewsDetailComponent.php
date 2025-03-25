<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\ArticleCreator;
use Livewire\Component;

class NewsDetailComponent extends Component
{
    public $slug;
    public $news_id;
    public $advert = true;
    public $setting;


    public function mount($slug, $news_id)
    {
        $this->slug = $slug;
        $this->news_id = $news_id;
        $this->setting = \App\Models\AppSetting::first();
        $this->advert = $this->setting->advert;
    }
    public function render()
    {
        $model = Article::find($this->news_id);
        $path = session()->get($this->news_id);
      
        if(!$path)
        {
            session()->put($this->news_id, 'true');

            $model->views += 1;

            $model->save();
        }

        return view('livewire.news-detail-component', ['article'=> $model]);
    }
}
