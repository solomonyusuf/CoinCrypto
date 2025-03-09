<?php

namespace App\Livewire;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
 

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
