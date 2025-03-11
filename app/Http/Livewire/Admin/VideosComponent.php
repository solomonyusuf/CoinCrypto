<?php

namespace App\Http\Livewire\Admin;

use App\Models\AppVideo;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class VideosComponent extends Component
{
    use WithFileUploads;
    
    public $count = 0;
     
    public function create(Request $request)
    {
        $image = '';

        if ($request->image) {
            $imageName = $request->image->storeAs('photos', uniqid() . '.' . $request->image->extension(), 'public');
            $image = $imageName;  
        }
        AppVideo::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'sponsored'=> $request->sponsored,
            'image'=> $image,
            'visible'=> $request->visible,
            'link'=> $request->link
        ]);

        //toast('Creation Successful', 'success');

        return redirect()->back();
    }
     public function update($id, Request $request)
    {
        $model = AppVideo::find($id);

        $image = $model->image;

        if ($request->image) {
            $imageName = $request->image->storeAs('photos', uniqid() . '.' . $request->image->extension(), 'public');
            $image = $imageName;  
        }
        $model->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'sponsored'=> $request->sponsored,
            'image'=> $image,
            'visible'=> $request->visible,
            'link'=> $request->link
        ]);

        //toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function delete($id)
    {
        AppVideo::find($id)->delete();

        //toast('Deletion Successful', 'success');

        return redirect()->back();
    }
    public function render() 
    {
        return view('livewire.admin.videos-component',[
            'videos' =>  AppVideo::orderByDesc('created_at')->get()
        ])->layout('layouts.admin');
    }
}
