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
        'visible'=> ''
    ];

    public function GetAll()
    {
        return ArticleCategory::orderByDesc('created_at')->get();
    }
    public function create()
    {
         ArticleCategory::create([
            'title' => $this->add['title'] ,
            'slug' => \Str::slug($this->add['title']) ,
             'visible' => $this->add['visible'] 
         ]);

        toast('Creation Successful', 'success');

        $this->tags = $this->GetAll();

        $this->reset('add');

    }
    public function update($id)
    {
        
        $query = ArticleCategory::find($id);
        $query->update([
                'title' => $this->add['title'] == '' ? $query->title : $this->add['title'],
                'slug' => $this->add['title'] == '' ? \Str::slug($query->title) : \Str::slug($this->add['title']),
                'visible' => $this->add['visible'] == '' ? $query->visible : $this->add['visible'],
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
