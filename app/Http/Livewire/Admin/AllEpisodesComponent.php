<?php

namespace App\Http\Livewire\Admin;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use App\Models\Episode;
use Livewire\Component;

class AllEpisodesComponent extends Component
{
    public function create(Request $request)
    {
        Episode::create([
            'podcast_id'=> $request->podcast_id,
		    'link'=> $request->link,
            'image'=> UploadController::UploadFile($request),
            'title'=> $request->title,
            'castbox'=> $request->castbox,
            'itunes'=> $request->itunes,
            'spotify'=> $request->spotify,
            'podchaser'=> $request->podchaser,
            'description'=> $request->description
        ]);
        
        toast('Creation Sucessful', 'success');
       
        return redirect()->back();
    }
    public function update($id, Request $request)
    {
        $query = Episode::find($id);
        $query->update([
            'podcast_id'=> $request->podcast_id,
            'link'=> $request->link,
            'image'=> $request->image ?  UploadController::UploadFile($request) : $query->image,
            'title'=> $request->title,
            'castbox'=> $request->castbox,
            'itunes'=> $request->itunes,
            'spotify'=> $request->spotify,
            'podchaser'=> $request->podchaser,
            'description'=> $request->description
        ]);
        
        toast('Update Sucessful', 'success');
       
        return redirect()->back();
    }
    public function delete($id)
    {
        Episode::find($id)->delete();
        
        toast('Deletion Sucessful', 'success');
       
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.admin.all-episodes-component');
    }
}
