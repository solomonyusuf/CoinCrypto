<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleCreator;
use App\Models\Newsletter;
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
        return Article::orderByDesc('created_at')->paginate(10);
    }
    public function create(Request $request)
    {
        $image = null;
        if ($request->image) {
            $image = UploadController::UploadFile($request);  
        }
        
        $entity = Article::create([
            'title' => $request->title, 
            'info' => $request->info, 
            'slug'=> Str::slug($request->title, '_'),
            'content' => $request->content,
            'image' => $image,
            'sponsored' => $request->sponsored,
            'visible' => $request->visible,
            'category_id' => $request->category_id,
            'newsletter_id' => $request->newsletter_id,
        ]);

        ArticleCreator::create([
            'article_id' => $entity->id,
		    'user_id'=> auth()->user()->id,
            'originator'=> true
        ]);

        toast('Creation Successful', 'success');

        return redirect()->route('admin_editor', $entity->id);
    }
    public function update($id, Request $request)
    {
        $model = Article::find($id);
        
        $image = $model->image;
        
        if ($request->image) {
            $image = UploadController::UploadFile($request); 
        }
        
        $model->update([
            'title' => $request->title, 
            'info' => $request->info, 
            'slug'=> Str::slug($request->title, '_'),
            'content' => $model->content,
            'image' => $image,
            'sponsored' => $request->sponsored,
            'visible' => $request->visible,
            'category_id' => $request->category_id,
            'newsletter_id' => $request->newsletter_id,
        ]);
        $model->save();

        $query = ArticleCreator::where([
            'user_id'=> auth()->user()->id,
            'article_id'=> $id
            ])->first();

        if(!$query)
        {

            ArticleCreator::create([
                'article_id' => $id,
                'user_id'=> auth()->user()->id
            ]);
        }

       // toast('Update Successful', 'success');

        return redirect()->back();
    }
     public function delete($id)
    {
        ArticleCreator::where('article_id', $id)->delete(); // Deletes all related records
        Article::where('id', $id)->delete();

        //toast('Deletion Successful', 'success');

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
            ->paginate(10);
        }
        else
        $articles = $this->GetAll();

        //dd(count($articles));

        $newsletters = Newsletter::get();

        return view('livewire.admin.article-component', 
        [
            'articles' => $articles ,
            'newsletters' => $newsletters ,
        ])
        ->layout('layouts.admin');
    }
}
