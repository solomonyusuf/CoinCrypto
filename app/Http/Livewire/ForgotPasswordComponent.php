<?php

namespace App\Http\Livewire;

use App\Mail\AppMail;
use App\Models\AppSetting;
use App\Models\User;
use Livewire\Component;
use Mail;

class ForgotPasswordComponent extends Component
{
    public string $email;


    public function submit()
    {
        $user = User::where(['email'=> $this->email])->first();

        if($user)
        {
            $password = 'C'.rand(00001,99999).'N';
            
            $user->password = bcrypt($password);
            $user->save();

            $setting = AppSetting::first();

            $body = str_replace('[password]', $password, $setting->reset_mail);
            
            Mail::to($user->email)->send(new AppMail(
                $setting->reset_subject,
                $body
            ));
        }

        toast('Account Reset Mail Sent!!','success');
        $this->redirect(route('forgot_password'));
    }
    public function render()
    {
        return view('livewire.forgot-password-component')->layout('layouts.auth');
    }
}
