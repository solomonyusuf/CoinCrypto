<?php

namespace App\Http\Livewire\Admin;

use App\Mail\AppMail;
use App\Models\ArticleCategory;
use Livewire\Component;
use Mail;

class ArticleTagComponent extends Component
{
    public $tags;
    public $count = 0;
    public $add = [
		'title' => '',
    ];

    public function GetAll()
    {
        return ArticleCategory::orderByDesc('created_at')->get();
    }
    public function create()
    {
         ArticleCategory::create($this->add);

        toast('Creation Successful', 'success');

        $this->tags = $this->GetAll();

        $this->reset('add');

    }
    public function update($id)
    {
        
        $query = ArticleCategory::find($id);
        $query->update([
                'title' => $this->add['title'] == '' ? $query->title : $this->add['title'],
             ]);
        $query->save();

        toast('Update Successful', 'success');
        
        $this->reset('add');

        $this->tags = $this->GetAll();
    }
     public function delete($id)
    {
        ArticleCategory::find($id)->delete();

        toast('Deletion Successful', 'success');

        $this->tags = $this->GetAll();
    }
    public function render()
    {
        $this->tags = $this->GetAll();

        return view('livewire.admin.article-tag-component')
        ->layout('layouts.admin');
    }
}
