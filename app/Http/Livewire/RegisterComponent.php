<?php

namespace App\Http\Livewire;

use App\Mail\AppMail;
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

   
                $url = route('login');
                Mail::to($user->email)->send(new AppMail(
                    'Account Sign up',
                    "
                    <p>Welcome to our platform! Your account has been successfully created.</p>
                        <p>To get started, please verify your email by clicking the button below.</p>
                        <a style=\"color:white;\" href=\"{$url}\" class=\"button\" >Access Account</a>"
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
        return view('livewire.register-component');
    }
}
