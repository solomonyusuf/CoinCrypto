<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Jobs\SendBulkEmails;
use App\Models\Newsletter;
use App\Models\Release;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class NewsletterComponent extends Component
{ 
    use WithFileUploads;
    public $count = 0;
     
    public function create(Request $request)
    {
        $image = '';

        if ($request->image) {
            $image = UploadController::UploadFile($request); 
        
        }
        
        $host_image = '';

        if ($request->host_image) {
            $host_image = UploadController::UploadFile2($request); 
         
        }
        Newsletter::create([
            'title'=> $request->title,
            'description'=> $request->description,
            //'sponsored'=> $request->sponsored,
            'image'=> $image,
            'visible'=> $request->visible,
            'link'=> $request->link,
            'host_image'=> $host_image,
            'host_name'=> $request->host_name,
        ]);

        //toast('Creation Successful', 'success');

        return redirect()->back();
    }
     public function update($id, Request $request)
    {
        $model = Newsletter::find($id);

        $image = $model->image;

        if ($request->image) {
            $image = UploadController::UploadFile($request);
        }
        
        $host_image = $model->host_image;

        if ($request->host_image) {
            $host_image = UploadController::UploadFile2($request); 
        }
        $model->update([
            'title'=> $request->title,
            'description'=> $request->description,
            //'sponsored'=> $request->sponsored,
            'image'=> $image,
            'visible'=> $request->visible,
            'host_image'=> $host_image,
            'host_name'=> $request->host_name,
        ]);
        $model->save();

        //toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function delete($id)
    {
        Newsletter::find($id)->delete();

        //toast('Deletion Successful', 'success');

        return redirect()->back();
    }
    public function publish($id, Request $request)
    {

        $entity = Release::create([
            'newsletter_id' => $id,
            'content'=> $request->content,
            'publish'=> true
        ]);

        SendBulkEmails::dispatch($entity->id);

        //toast('Creation Successful', 'success');

        return redirect()->back();
    }
    public function render()
    {
        $search = request()?->search;

        $list = null;

        if($search)
        {
            $list = Newsletter::where('title', 'LIKE', "%{$search}%")
            ->paginate(20);
        }
        else
        $list = Newsletter::orderByDesc('created_at')->paginate(20);

        return view('livewire.admin.newsletter-component',[
            'letters' => $list 
        ])
        ->layout('layouts.admin');
    }
}
