<?php

namespace App\Http\Livewire;

use App\Models\AppSetting;
use App\Models\Article;
use App\Models\ArticleCreator;
use App\Models\User;
use Livewire\Component;

class AuthorComponent extends Component
{
    public $auth_id;

    public $paginate = false;
    public $advert = true;

    public function togglePaginate()
    {
        $this->paginate = !$this->paginate;
    }
    public function mount($auth_id)
    {
        $this->auth_id = $auth_id;
    }
    public function render()
    {
        $author = User::find($this->auth_id);

        $creation = ArticleCreator::orderByDesc('created_at')
        ->where('user_id', '=', $author->id)
        ->paginate(10);
 

        return view('livewire.author-component', [
            'author'=> $author,
            'creation'=> $creation,
            'setting'=> AppSetting::first(),
        ]);
    }
}
