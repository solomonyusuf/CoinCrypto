<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Models\AppSetting;
use App\Models\AppVideo;
use App\Models\Article;
use App\Models\ArticleCategory;
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
            'first'=> $request->first,
            'theme'=> $request->theme,
            'default_event_color'=> $request->default_event_color,
		    'default_event_background'=> $request->default_event_background,
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
            'login_subject' => $query->login_subject,
            'login_mail'=> $query->login_mail,
            'register_subject'=> $query->register_subject,
            'register_mail'=> $query->register_mail,
            'reset_subject'=> $query->reset_subject,
            'reset_mail'=> $query->reset_mail,
            'activate_newsletter_subject'=> $query->activate_newsletter_subject,
            'activate_newsletter_mail'=> $query->activate_newsletter_mail,
             
             //-------------------------------
            'top_left_article'=> $request->top_left_article,
            'top_right_article'=> $request->top_right_article,
            'second_left'=> $request->second_left,
            'second_right'=> $request->second_right,
            'third_section'=> $request->third_section,
            'fourth_section'=> $request->fourth_section,
            'fifth_section'=> $request->fifth_section,
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
        $articles = Article::orderByDesc('created_at')->get();
        $videos = AppVideo::orderByDesc('created_at')->get();
        $categories = ArticleCategory::orderByDesc('created_at')->get();
        return view('livewire.admin.app-setting-component',[
            'setting'=> $setting,
            'articles'=> $articles,
            'videos'=> $videos,
            'categories'=> $categories,
        ])->layout('layouts.admin');
    }
}
