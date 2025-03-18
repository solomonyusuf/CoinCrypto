<?php

namespace App\Http\Livewire;

use App\Mail\AppMail;
use App\Models\Newsletter;
use App\Models\Subscription;
use Livewire\Component;
use Illuminate\Http\Request;
use Mail;

class PageNewsletterComponent extends Component
{
    public $count = 0;

    public function subscribe($id, Request $request)
    {
        
        $check = Subscription::where(['email'=> $request->email])->first();

        if($check){
            toast('Subscribed Previously','warning');
            return redirect()->back();
        }

        if(!$request->letter_id && $id == 'test')
        {
            toast('Select a valid newsletter','warning');
            return redirect()->back();
        }

        $id = $id == 'test' ? $request->letter_id[0] : $id ;


        $sub = Subscription::create([
            'newsletter_id' => $id ,
            'email' =>  $request->email,
        ]);

        $url = route('activate_sub', $sub->id);
        Mail::to($request->email)->send(new AppMail(
            'Activate Subscription',
            "
            <p>Welcome to our newsletter! Your subscription is successfully created.</p>
                <p>To get started, please verify your email by clicking the button below.</p>
                <a href=\"{$url}\" class=\"button\">Activate</a>"
        ));

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
        $newsletters = Newsletter::orderByDesc('created_at')->get();
        return view('livewire.page-newsletter-component',[
            'newsletters'=> $newsletters
        ]);
    }
}
