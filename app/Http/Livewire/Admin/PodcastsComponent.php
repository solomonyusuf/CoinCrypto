<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Models\Podcast;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
class PodcastsComponent extends Component
{
    use WithFileUploads;
    public $count = 0;
     
    public function create(Request $request)
    {
        $image = '';

        if ($request->image) {
            $image = UploadController::UploadFile($request); 
         
        }
        Podcast::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'sponsored'=> false,
            'image'=> $image,
            'host'=> $request->host,
            'visible'=> $request->visible,
            'link'=> $request->link
        ]);

        //toast('Creation Successful', 'success');

        return redirect()->back();
    }
     public function update($id, Request $request)
    {
        $model = Podcast::find($id);

        $image = $model->image;

        if ($request->image) {
            $image = UploadController::UploadFile($request);   
        }
        $model->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'sponsored'=>false,
            'image'=> $image,
            'host'=> $request->host,
            'visible'=> $request->visible,
            'link'=> $request->link
        ]);

        //toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function delete($id)
    {
        Podcast::find($id)->delete();

        //toast('Deletion Successful', 'success');

        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.admin.podcasts-component',[
            'podcasts' =>  Podcast::orderByDesc('created_at')->get()
        ])
        ->layout('layouts.admin');
    }
}
