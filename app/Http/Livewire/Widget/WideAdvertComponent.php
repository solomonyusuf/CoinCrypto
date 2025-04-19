<?php

namespace App\Http\Livewire\Widget;

use App\Models\Advert;
use App\Models\AppSetting;
use App\Models\ArticleCategory;
use App\Models\ArticleTab;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;

class WideAdvertComponent extends Component
{
    public $setting;
    public $ads;
    public $advert;
    public $type;
    public $adImages;
    public $adLinks;
    public $first = true;
    public $second = false;
    public $categories;
    public $adminRole;
    public $showAll = false;

    public $tab;

    public function set_category(Request $request)
    {
        $query = ArticleTab::firstOrCreate([]);
        $query->update([
            'first'=> $request->first,
            'second'=> $request->second,
        ]);
        $query->save();

        toast('Update Successful', 'success');
        return redirect()->back();
    }
    public function toggleFirst()
    {
        $this->first = true;
        $this->second = false;
    }
    public function toggleSecond()
    {
        $this->first = false;
        $this->second = true;
    }
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

        $this->tab = ArticleTab::firstOrCreate([]);
        $this->categories =  ArticleCategory::get();
        $role = User::find(auth()->user()?->id)?->role;

        $this->adminRole = $role?->title == 'superadmin' ? true : false;
 
    }
    public function render()
    {
        return view('livewire.widget.wide-advert-component');
    }
}
