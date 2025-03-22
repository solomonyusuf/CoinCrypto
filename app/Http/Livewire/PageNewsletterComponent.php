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

                $temp = route('activate_sub', $sub->id);
                Mail::to($request->email)->send(new AppMail(
                    'Activate Subscription',
                    "
                    <p>Welcome to our newsletter! Your subscription is successfully created.</p>
                        <p>To get started, please verify your email by clicking the button below.</p>
                        <a href=\"{$temp}\" class=\"button\">Activate</a>"
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

            $temp = route('activate_sub', $sub->id);
            Mail::to($request->email)->send(new AppMail(
                'Activate Subscription',
                "
                <p>Welcome to our newsletter! Your subscription is successfully created.</p>
                    <p>To get started, please verify your email by clicking the button below.</p>
                    <a href=\"{$temp}\" class=\"button\">Activate</a>"
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
        $newsletters = Newsletter::orderByDesc('created_at')->get();
        return view('livewire.page-newsletter-component',[
            'newsletters'=> $newsletters
        ]);
    }
}
