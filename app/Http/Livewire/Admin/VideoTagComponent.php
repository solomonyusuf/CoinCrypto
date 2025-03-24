<?php

namespace App\Http\Livewire\Admin;

use App\Models\VideoCategory;
use Livewire\Component;
use Illuminate\Http\Request;
class VideoTagComponent extends Component
{
    public $count = 0;

    public function create(Request $request)
    {
        VideoCategory::create([
            'description' => $request->description,
		    'title' => $request->title
        ]);
        
        toast('Creation Sucessful', 'success');
       
        return redirect()->back();
    }
    public function update($id, Request $request)
    {
        $query = VideoCategory::find($id);
        $query->update([
            'description' => $request->description,
		    'title' => $request->title
        ]);
        
        toast('Update Sucessful', 'success');
       
        return redirect()->back();
    }
    public function delete($id)
    {
        VideoCategory::find($id)->delete();
        
        toast('Deletion Sucessful', 'success');
       
        return redirect()->back();
    }
    public function render()
    {
        
        return view('livewire.admin.video-tag-component',[
            'tags'=> VideoCategory::orderByDesc('created_at')->get()
        ])->layout('layouts.admin');
    }
}
