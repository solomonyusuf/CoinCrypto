<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ForgotPasswordComponent extends Component
{
    public string $email;

    public function submit()
    {

    }
    public function render()
    {
        return view('livewire.forgot-password-component');
    }
}
