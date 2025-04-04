<?php

namespace App\Http\Livewire;

use App\Mail\AppMail;
use App\Models\AppSetting;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Newsletter;
use App\Models\Subscription;
use Livewire\Component;
use Illuminate\Http\Request;
use Mail;

class PageNewsletterComponent extends Component
{
    public $count = 0;

    public $news_id;
    public $advert = true;
    public function mount($news_id)
    {
        $this->news_id = $news_id;
    }
    public function subscribe($id, Request $request)
    {
        
        if(!$request->letter_id && $id == 'test')
        {
            toast('Select a valid newsletter','warning');
            return redirect()->back();
        }

        if(count($request->letter_id) > 1)
        {
           foreach($request->letter_id as $param)
           {
                $id = $param;
                $check = Subscription::where([
                    'email'=> $request->email,
                    'newsletter_id' => $id
                    ])->first();
        
                if($check){
                    toast('Subscribed Previously','warning');
                    return redirect()->back();
                }

                $sub = Subscription::create([
                    'newsletter_id' => $id ,
                    'email' =>  $request->email,
                ]);

                $url = route('activate_sub', $sub->id);
                $setting = AppSetting::first();
                
                $body = str_replace('[url]', $url, $setting->activate_newsletter_mail);
                
                Mail::to($request->email)->send(new AppMail(
                    $setting->activate_newsletter_subject,
                    $body
                ));
           }

           
        }
        else
        {
            $id = $id == 'test' ? $request->letter_id[0] : $id ;

            $check = Subscription::where([
                'email'=> $request->email,
                'newsletter_id' => $id
                ])->first();
    
            if($check){
                toast('Subscribed Previously','warning');
                return redirect()->back();
            }

            $sub = Subscription::create([
                'newsletter_id' => $id ,
                'email' =>  $request->email,
            ]);

            $url = route('activate_sub', $sub->id);
            $setting = AppSetting::first();
            
            $body = str_replace('[url]', $url, $setting->activate_newsletter_mail);
            
            Mail::to($request->email)->send(new AppMail(
                $setting->activate_newsletter_subject,
                $body
            ));

        }
        

        toast('Subscription Successful','success');

        return redirect()->back();
    }

    public function activate_sub($sub_id)
    {
        $sub = Subscription::find($sub_id);
        $sub->confirmed = true;
        $sub->save();

        toast('Activation Successful','success');

        return redirect()->route('home');
    }
    public function render()
    {
        $newsletter = Newsletter::find($this->news_id);
        $category = ArticleCategory::where('title', '=', 'Opinion')->first();
        
        $opinions = Article::where(['visible'=> true])
        ->orderByDesc('created_at')->where(['category_id'=> $category->id])
        ->paginate(10);
        
        return view('livewire.page-newsletter-component',[
            'newsletter'=> $newsletter,
            'opinions'=> $opinions,
            'setting'=> \App\Models\AppSetting::first(),
        ]);
    }
}
