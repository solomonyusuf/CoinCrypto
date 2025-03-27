<?php

namespace App\Http\Livewire\Admin;

use App\Models\Newsletter;
use App\Models\Subscription;
use Livewire\Component;

class ReleaseComponent extends Component
{
    public $sub_id;
    public function mount($sub_id)
    {
        $this->sub_id = $sub_id;
    }
    public function render()
    {
        $subscription = Newsletter::find($this->sub_id);

        return view('livewire.admin.release-component',[
            'subscription'=> $subscription
        ])
        ->layout('layouts.admin');
    }
}
