<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditorComponent extends Component
{
    public $temp_id;
    public function mount($temp_id)
    {
        $this->temp_id = $temp_id;
    }
    public function render()
    {
        return view('livewire.admin.editor-component')
        ->layout('layouts.admin');
    }
}
