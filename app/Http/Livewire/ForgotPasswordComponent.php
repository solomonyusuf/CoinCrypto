<?php

namespace App\Http\Livewire;

use App\Mail\AppMail;
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

            Mail::to($user->email)->send(new AppMail(
                'Account Reset',
                "
                <p>You recently requested to reset your password. </p>
                <p>Your new password had been generated for you.</p>
                <span class=\"button\">{$password}</span>"      
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
