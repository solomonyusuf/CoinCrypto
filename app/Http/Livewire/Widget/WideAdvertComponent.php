<?php

namespace App\Http\Livewire\Widget;

use App\Models\Advert;
use App\Models\AppSetting;
use Livewire\Component;

class WideAdvertComponent extends Component
{
    public $setting;
    public $ads;
    public $advert;
    public $type;
    public $adImages;
    public $adLinks;

    public function mount($type)
    {
        $this->type = $type;
        $this->setting = AppSetting::first();
        $this->advert = $this->setting?->advert;
        $this->adImages = Advert::where(['visible'=> true])
                            ->where(['location'=> $type])
                            ->select('image')
                            ->get(); 
        $this->adLinks = Advert::where(['visible'=> true])
                            ->where(['location'=> $type])
                            ->select('link')
                            ->get(); 
    }
    public function render()
    {
        return view('livewire.widget.wide-advert-component');
    }
}
