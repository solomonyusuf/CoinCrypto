<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Models\Advert;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class AllAdvertsComponent extends Component
{
    use WithFileUploads;
    public $count =1;
    public $locations = [
        'nav_top',
        'home',
        'article_detail',
        'category_detail',
        'videos',
    ];
    public function create(Request $request)
    {
        $image = '';

        if ($request->image) {
            $image = UploadController::UploadFile($request); 
        }

        Advert::create([
           'title'=> $request->title,
		    'image'=> $image,
            'link'=> $request->link,
            'location'=> $request->location,
            'visible'=> $request->visible,
        ]);

        toast('Creation Successful', 'success');

        return redirect()->back();
    }
    
    public function update($id, Request $request)
    {
        $query = Advert::find($id);
        $image = $query->image;

        if ($request->image) {
            $image = UploadController::UploadFile($request);   
        }
        $query->update([
            'title'=> $request->title,
		    'image'=> $image,
            'link'=> $request->link,
            'location'=> $request->location,
            'visible'=> $request->visible,
        ]);

        toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function delete($id)
    {
        Advert::find($id)->delete();

        toast('Deletion Successful', 'success');
        return redirect()->back();
    }
    public function render()
    {
        $list = Advert::orderByDesc('created_at')->get();
        return view('livewire.admin.all-adverts-component', [
            'list'=> $list
        ])->layout('layouts.admin');
    }
}
