<?php

namespace App\Http\Livewire\Static;

use Livewire\Component;

class SellInfoComponent extends Component
{
    public $setting;

    public function mount()
    {
        $this->setting = \App\Models\AppSetting::first();
    }
    public function render()
    {
        return view('livewire.static.sell-info-component');
    }
}
