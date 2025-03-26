<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Models\AppSetting;
use Livewire\Component;
use Illuminate\Http\Request;

class AppSettingComponent extends Component
{ 
    public function update(Request $request)
    {
        $query = AppSetting::first();

        $query->update([
            'logo' => $request->image ? UploadController::UploadFile($request) : $query->logo,
            'name'=> $request->name,
            'email'=> $request->email,
            'address'=> $request->address,
            'contact'=> $request->contact,
            //-------------------------------
            'masthead'=> $request->masthead,
            'news'=> $request->news,
            'prices'=> $request->prices,
            'concensus'=> $request->concensus,
            'sponsored'=> $request->sponsored,
            'videos'=> $request->videos,
            'podcasts'=> $request->podcasts,
            'newsletters'=> $request->newsletters,
            'webinar'=> $request->webinar,
             //-------------------------------
            'footer_info'=> $request->footer_info,
            'footer_name'=> $request->footer_name,
            'do_not_sell'=> $request->do_not_sell,
            'about'=> $request->about,
            'sitemap'=> $request->sitemap,
            'ethics'=> $request->ethics,
            'terms'=> $request->terms,
            'privacy'=> $request->privacy,
            'cookie'=> $request->cookie,
            'accessibility'=> $request->accessibility,
            'advertising'=> $request->advertising,
             //-------------------------------
            'language'=> $request->language,
            'top_ticker'=> $request->top_ticker,
            'advert'=> $request->advert,
            'top_event'=> $request->top_event,
            'event_section'=> $request->event_section,
            'podcast'=> $request->podcast,
            'most_read'=> $request->most_read,
            'newsletter'=> $request->newsletter,
             //-------------------------------
            'twitter'=> $request->twitter,
            'facebook'=> $request->facebook,
            'linkedin'=> $request->linkedin,
            'instagram'=> $request->instagram,
            'youtube'=> $request->youtube,
            'tiktok'=> $request->tiktok,
            'discord'=> $request->discord,
            'telegram'=> $request->telegram,
             //-------------------------------
            'apple'=> $request->apple,
            'google'=> $request->google
        
        ]);

        toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function render()
    {
        $setting = AppSetting::first();

        return view('livewire.admin.app-setting-component',[
            'setting'=> $setting
        ])->layout('layouts.admin');
    }
}
