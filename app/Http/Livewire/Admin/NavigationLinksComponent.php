<?php

namespace App\Http\Livewire\Admin;

use App\Models\PageLink;
use Livewire\Component;
use Illuminate\Http\Request;
use Str;

class NavigationLinksComponent extends Component
{
    public $count =1;
    public function create(Request $request)
    {
        PageLink::create([
            'name'=> $request->name,
            'slug'=> $request->slug,
            'visible'=> $request->visible,
        ]);

        toast('Creation Successful', 'success');

        return redirect()->back();
    }
    
    public function update($id, Request $request)
    {
        $query = PageLink::find($id);

        $query->update([
            'name'=> $request->name,
            'slug'=> $request->slug,
            'visible'=> $request->visible,
        ]);

        toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function delete($id)
    {
        PageLink::find($id)->delete();

        toast('Deletion Successful', 'success');
        return redirect()->back();
    }
    public function render()
    {
        $links = PageLink::orderByDesc('created_at')->get();
        return view('livewire.admin.navigation-links-component',[
            'links'=> $links
        ])
        ->layout('layouts.admin');
    }
}
