<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Http\Request;
use App\Models\Article;
use Livewire\Component;

class EditorComponent extends Component
{
    public $temp_id;
    public function mount($temp_id)
    {
        $this->temp_id = $temp_id;
    }
    public function update_editor($id, Request $request)
    {
        $query = Article::find($id);
        $query->content = $request->editor;
        $query->save();

        toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function render()
    {
        $article = Article::find($this->temp_id);

        return view('livewire.admin.editor-component', [
            'article'=> $article
        ])
        ->layout('layouts.admin');
    }
}
