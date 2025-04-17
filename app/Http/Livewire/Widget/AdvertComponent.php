<?php

namespace App\Http\Livewire\Widget;

use App\Models\Advert;
use App\Models\AppSetting;
use Livewire\Component;

class AdvertComponent extends Component
{
    public $setting;
    public $ads;
    public $advert;

    public function mount($type)
    {
        $this->setting = AppSetting::first();
        $this->advert = $this->setting?->advert;
        $this->ads = Advert::where(['visible'=> true])
                            ->where(['location'=> $type])
                            ->get();
    }
    public function render()
    {
        return view('livewire.widget.advert-component');
    }
}
