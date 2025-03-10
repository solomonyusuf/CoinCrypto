<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UsersComponent extends Component
{
    public $users;
    public $model = [
        'role_id',
		'image',
		'info',
		'linkedin',
		'twitter',
		'first_name',
		'last_name',
		'email',
		'email_verified_at',
		'password',
    ];

    public function GetAll()
    {
        return User::orderByDesc('created_at')->get();
    }
    public function create()
    {
        User::create($this->model);

        toast('Creation Successful', 'success');

        $this->model = [];

        $this->users = $this->GetAll();
    }
     public function update($id)
    {
        User::find($id)->update($this->model);

        toast('Update Successful', 'success');
        
        $this->model = [];

        $this->users = $this->GetAll();
    }
     public function delete($id)
    {
        User::find($id)->delete();

        toast('Deletion Successful', 'success');

        $this->users = $this->GetAll();
    }
    public function render()
    {
        $this->users = $this->GetAll();

        return view('livewire.admin.users-component')
        ->layout('layouts.admin');
    }
}
