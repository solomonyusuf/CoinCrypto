<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\ArticleCreator;
use App\Models\ArticleReaction;
use App\Models\ArticleSocical;
use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Str;

class NewsDetailComponent extends Component
{
    public $slug;
    public $socical;
    public $news_id;
    public $advert = true;
    public $open = false;
    public $showAll  = false;
    public $setting;
    public $entity;
    public $all_reactions = [
        '😊' => 'Smiling',
        '😂' => 'LOL',
        '😍' => 'Love Eyes',
        '😭' => 'Crying',
        '😡' => 'Angry',
        '😢' => 'Sad',
        '😱' => 'Shocked',
        '😎' => 'Cool',
        '🤔' => 'Thinking',
        '🤯' => 'Mind Blown',
        '❤️' => 'Love',
        '💔' => 'Heartbroken',
        '👏' => 'Clap',
        '👍' => 'Thumbs Up',
        '👎' => 'Thumbs Down',
        '🔥' => 'Fire',
        '💩' => 'Poop',
        '🎉' => 'Party',
        '🥳' => 'Celebration',
        '🤩' => 'Starstruck',
        '😴' => 'Sleepy',
        '🙄' => 'Eye Roll',
        '🥺' => 'Pleading',
        '🤢' => 'Disgust',
        '🤮' => 'Vomiting',
        '😬' => 'Awkward',
        '😇' => 'Innocent',
        '🤗' => 'Hug',
        '😤' => 'Frustrated',
        '🙌' => 'Praise',
        '🤝' => 'Handshake',
        '👀' => 'Eyes',
        '🧠' => 'Smart',
        '🚀' => 'Rocket',
        '💡' => 'Idea',
        '📉' => 'Bad',
        '📈' => 'Good',
        '🧊' => 'Cool',
        '💸' => 'Money',
      ];
    public $reactions;



    public function react_post($reaction)
    {
        if(!session()->get('reacted'.$this->entity->id))
        {
            ArticleReaction::create([
                'article_id'=> $this->entity->id,
                'type'=> $reaction,
                'count'=> 1
            ]);

            session()->put('reacted'.$this->entity->id, true);

            $this->reactions = $this->all_reactions;
        }
        
    }
    
    public function toggleShare()
    {
        $this->open = !$this->open;
    }

    public function mount($slug, $news_id)
    {
        $this->reactions = $this->all_reactions;
        $this->slug = $slug;
        $this->news_id = $news_id;
        $this->setting = \App\Models\AppSetting::first();
        $this->advert = $this->setting->advert;
        $query = Article::find($news_id);
        $this->socical = isset($query->socicals[0]) ? $query->socicals[0] : null;
        $this->entity = $query;
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

        // SEOMeta::setTitle($model->title.' - '. $this->setting->name);
        // SEOMeta::setDescription(Str::limit(strip_tags($model->content), 200, '..'));
        // OpenGraph::setTitle($model->title.' - '. $this->setting->name);
        // OpenGraph::setDescription(Str::limit(strip_tags($model->content), 200, '..'));
        // OpenGraph::addImage(asset($model->image));
        // OpenGraph::setUrl(url()->current());

        return view('livewire.news-detail-component', ['article'=> $model]);
    }
}
