<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Models\Event;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class EventComponent extends Component
{
    use WithFileUploads;
    public $count = 0;

    public function update($id, Request $request)
    {
        $model = Event::find($id);

        $image = $model->image;

        if ($request->image) {
            $image = UploadController::UploadFile($request);  
        }
        $model->update([
            'title'=> $request->title,
            'content'=> $request->content,
            'sponsored'=> $request->sponsored,
            'image'=> $image,
            'category'=> $request->category,
            'event_date'=> $request->event_date
        ]);
        $model->save();

       // toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function create(Request $request)
    {
        $image = '';

        if ($request->image) {
            $image = UploadController::UploadFile($request);   
        }
        Event::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'sponsored'=> $request->sponsored,
            'image'=> $image,
            'category'=> $request->category,
            'event_date'=> $request->event_date
        ]);

        //toast('Creation Successful', 'success');

        return redirect()->back();
    }
    public function delete($id)
    {
        Event::find($id)->delete();

        //toast('Deletion Successful', 'success');

        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.admin.event-component', [
            'events'=> Event::orderByDesc('created_at')->get()
        ])
        ->layout('layouts.admin');
    }
}
