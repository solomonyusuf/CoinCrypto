<?php

namespace App\Http\Livewire;

use App\Mail\AppMail;
use App\Models\AppSetting;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Mail;

class RegisterComponent extends Component
{
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $password;

    public function submit()
    {
        // try
        // {
            $user = User::where(['email'=> $this->email])->first();
            
            if($user)
            {
                toast('Email is already taken', 'warning');

                $this->redirect(route('register'));
            }
            else
            {
                $role = Role::where(['title'=> 'member'])->first();
               
                $user = User::create([
                    'role_id'=> $role->id,
                    'first_name'=> $this->first_name,
                    'last_name'=> $this->last_name,
                    'email'=> $this->email,
                    'password'=> bcrypt($this->password),
                ]);

   
                $setting = AppSetting::first();

                $url = route('login');
               
                $body = str_replace('[url]', $url, $setting->register_mail);
                
                Mail::to($user->email)->send(new AppMail(
                    $setting->register_subject,
                    $body
                ));
                
                toast('Account Created Successfully', 'success');

                $this->redirect(route( 'login'));
            }
        // }
        // catch(\Exception $ex)
        // {
        //     toast('An error Occured', 'error');
        //     $this->redirect(route('register'));
        // }
    
    }

    public function render()
    {
        return view('livewire.register-component')->layout('layouts.auth');
    }
}
