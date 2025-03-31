<?php

namespace App\Http\Livewire;
use App\Mail\AppMail;
use App\Models\AppSetting;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Mail;
 

class LoginComponent extends Component
{
    
    public string $email;
    public string $password;
    public bool $remember = false;

    public function submit()
    {
        try
        {
            $check = auth()->attempt([
                'email'=> $this->email,
                'password'=> $this->password,
            ], $this->remember);

            if($check)
            {
                $user = User::find(auth()->user()?->id);
                $setting = AppSetting::first();
                $url = route('login');
               
                $body = str_replace('[url]', $url, $setting->login_mail);
                
                Mail::to($user->email)->send(new AppMail(
                    $setting->login_subject,
                    $body
                ));

                toast('Login Successful', 'success');
 
                if($user?->role->title == 'member') 
                    $this->redirect(route('home'));
                elseif($user?->role->title == 'author')
                $this->redirect(route('article_tags'));
                else
                $this->redirect(route('dashboard'));
            }
            else
            {
                alert()->error('Invalid Credentials', 'Sorry your password or email is wrong');
                $this->redirect(route('login'));
            }

            
        }
        catch(\Exception $ex)
        {
           toast('An error Occured', 'error');
           $this->redirect(route('login'));
        }
    }
    public function render()
    {
        return view('livewire.login-component')
        ->layout('layouts.auth');
    }
}
