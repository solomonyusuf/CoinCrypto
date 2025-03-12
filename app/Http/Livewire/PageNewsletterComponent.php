<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class PageNewsletterComponent extends Component
{
    public function render()
    {
        $newsletters = Newsletter::orderByDesc('created_at')->get();
        return view('livewire.page-newsletter-component',[
            'newsletters'=> $newsletters
        ]);
    }
}
