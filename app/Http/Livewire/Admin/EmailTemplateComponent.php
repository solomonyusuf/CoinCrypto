<?php

namespace App\Http\Livewire\Admin;

use App\Models\AppSetting;
use Livewire\Component;
use Illuminate\Http\Request;
class EmailTemplateComponent extends Component
{
    public function update(Request $request)
    {
        $query = AppSetting::first();
        
        $query->login_subject = $request->login_subject;
        $query->login_mail= $request->login_mail;
        $query->register_subject= $request->register_subject;
        $query->register_mail= $request->register_mail;
        $query->reset_subject= $request->reset_subject;
        $query->reset_mail= $request->reset_mail;
        $query->activate_newsletter_subject= $request->activate_newsletter_subject;
        $query->activate_newsletter_mail= $request->activate_newsletter_mail;

        $query->save();

        toast('Update Successful', 'success');

        return redirect()->back();
    }
    public function render()
    {
        $setting = AppSetting::first();
        return view('livewire.admin.email-template-component',[
            'setting'=> $setting
        ])
        ->layout('layouts.admin');
    }
}
