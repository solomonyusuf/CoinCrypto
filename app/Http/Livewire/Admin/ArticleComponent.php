<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\ArticleCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Str;

class ArticleComponent extends Component
{
    use WithFileUploads;
    public $categories;
    public $count = 0;
    public $image;
    public $add = [
		'title' => '',
		'slug'=> '',
		'content' => '',
		'image' => '',
		'sponsored' => '',
		'visible' => '',
		'category_id' => '',
    ];

    public function GetAll()
    {
        return Article::orderByDesc('created_at')->paginate(20);
    }
    public function create(Request $request)
    {
        $image = null;
        if ($request->image) {
            $imageName = $request->image->storeAs('photos', uniqid() . '.' . $request->image->extension(), 'public');
            $image = $imageName;  
        }
        
        Article::create([
            'title' => $request->title, 
            'slug'=> Str::slug($request->title, '_'),
            'content' => $request->content,
            'image' => $image,
            'sponsored' => $request->sponsored,
            'visible' => $request->visible,
            'category_id' => $request->category_id,
        ]);

        toast('Creation Successful', 'success');

        return redirect()->back();
    }
    public function update($id, Request $request)
    {
        $model = Article::find($id);
        
        $image = $model->image;
        
        if ($request->image) {
            $imageName = $request->image->storeAs('photos', uniqid() . '.' . $request->image->extension(), 'public');
            $image = $imageName;  
        }
        
        $model->update([
            'title' => $request->title, 
            'slug'=> Str::slug($request->title, '_'),
            'content' => $request->content,
            'image' => $image,
            'sponsored' => $request->sponsored,
            'visible' => $request->visible,
            'category_id' => $request->category_id,
        ]);
        $model->save();

        toast('Update Successful', 'success');

        return redirect()->back();
    }
     public function delete($id)
    {
        Article::find($id)->delete();

        toast('Deletion Successful', 'success');

        return redirect()->back();
    }
    public function render()
    {
        $this->categories = ArticleCategory::get();
        $search = request()?->search;

        $articles = null;

        if($search)
        {
            $articles = Article::Where('content', 'LIKE', "%{$search}%")
            ->orwhere('title', 'LIKE', "%{$search}%")
            ->paginate(20);
        }
        else
        $articles = $this->GetAll();

        return view('livewire.admin.article-component', ['articles' => $articles ])
        ->layout('layouts.admin');
    }
}
