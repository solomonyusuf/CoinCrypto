<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterComponent extends Component
{
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $password;

    public function submit()
    {
        $user = User::where(['email'=> $this->email])->first();
        
        if($user)
        {
            toast('Email is already taken', 'warning');

            $this->redirect(route('register'));
        }
        else
        {
            
            toast('Account Created Successfully', 'success');

            $this->redirect(route(name: 'login'));
        }
    
    }

    public function render()
    {
        return view('livewire.register-component');
    }
}
