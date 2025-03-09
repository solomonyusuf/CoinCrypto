<?php

namespace App\Livewire;
use App\Mail\AppMail;
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

                $url = route('login');
                Mail::to($user->email)->send(new AppMail(
                    'Account Login',
                    "
                    <p>We noticed a new login to your account. If this was you, no further action is needed.</p>
                    <p>If you didn't log in, please reset your password immediately.</p>
                    <a href=\"{$url}\" class=\"button\">Secure My Account</a>"
                ));

                toast('Login Successful', 'success');

                if($user?->role->title == 'member') $this->redirect(route('home'));
              
                $this->redirect(route('dashboard'));
            }
            else
            {
                alert()->error('Invalid Credentials', 'Sorry your password or email is wrong');
            }

            $this->redirect(route('login'));
        }
        catch(\Exception $ex)
        {
           toast('An error Occured', 'error');
           $this->redirect(route('login'));
        }
    }
    public function render()
    {
        return view('livewire.login-component');
    }
}
