<?php

namespace App\Http\Livewire\Widget;

use Livewire\Component;
use App\Models\Advert;
use App\Models\AppSetting;
use App\Models\ArticleCategory;
use App\Models\ArticleTab;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleTabComponent extends Component
{
    public $setting;
    public $first = true;
    public $second = false;
    public $categories;
    public $adminRole;

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
    public function mount()
    {
        $this->setting = AppSetting::first();
        $this->tab = ArticleTab::firstOrCreate([]);
        $this->categories =  ArticleCategory::get();
        $role = User::find(auth()->user()?->id)?->role;

        $this->adminRole = $role?->title == 'superadmin' ? true : false;
 
    }

    public function render()
    {
        return view('livewire.widget.article-tab-component');
    }
}
