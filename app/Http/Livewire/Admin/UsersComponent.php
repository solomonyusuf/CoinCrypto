<?php

namespace App\Http\Livewire\Admin;

use App\Mail\AppMail;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mail;

class UsersComponent extends Component
{
    use WithFileUploads;
    public $roles;
    public $count = 0;  
    public $users;
    public $image;
    public $update_image;
    public $add = [
        'role_id' => '',
		'image' => '',
		'info' => '', 
		'linkedin' => '',
		'twitter' => '',
		'first_name' => '',
		'last_name' => '',
		'email' => '',
		'password' => '',
    ];

    public function GetAll()
    {
        return User::orderByDesc('created_at')->get();
    }
    public function create()
    {
        if ($this->image) {
            $imageName = uniqid() . '.' . $this->image->extension(); // Generate unique filename
            $this->image->move(public_path('uploads'), $imageName); // Move file to public/photos
            
            $this->add['image'] = 'uploads/' . $imageName;
        }
         
        $entity = User::create($this->add);

        toast('Creation Successful', 'success');

        $this->users = $this->GetAll();

        $url = route('login');
        Mail::to($entity->email)->send(new AppMail(
            'Account Sign up',
            "
            <p>Welcome to our platform! Your account has been successfully created.</p>
                <p>To get started, check your credentials below.</p>
                <p>your email is {$entity->email}.</p>
                <p>your password is {$this->add->password}.</p>
                <a href=\"{$url}\" class=\"button\">Access Account</a>"
        ));

        $this->reset('add');
        $this->reset('image');

    }
    public function update($id)
    {
        if ($this->update_image) 
        {
            $imageName = uniqid() . '.' . $this->update_image->extension(); // Generate unique filename
            $this->update_image->move(public_path('uploads'), $imageName); // Move file to public/photos
            
            $this->add['image'] = 'uploads/' . $imageName;
        }
        
        $query = User::find($id);
        $query->update([
            'role_id' => $this->add['role_id'] == '' ? $query->role_id : $this->add['role_id'],
            'image' => $this->update_image ? $this->add['image'] : $query->image,
            'info' => $this->add['info'] == '' ? $query->info : $this->add['info'], 
            'linkedin' => $this->add['linkedin'] == ''? $query->linkedin : $this->add['linkedin'],
            'twitter' => $this->add['twitter'] == ''? $query->twitter :$this->add['twitter'],
            'first_name' => $this->add['first_name'] == ''? $query->first_name : $this->add['first_name'],
            'last_name' => $this->add['last_name'] == ''? $query->last_name : $this->add['last_name'],
            'email' =>  $query->email,
            'password' => $this->add['password'] == '' ? $query->password :  bcrypt($this->add['password']),
        ]);
        $query->save();

        toast('Update Successful', 'success');
        
        $this->reset('add');
        $this->reset('image');

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
        $user = User::find(auth()->user()->id);

        if($user?->role?->title != 'superadmin')
        {
            toast('Unauthorized Acess', 'error');
            return redirect()->back();
        }
        $this->roles = Role::get();
        $this->users = $this->GetAll();

        return view('livewire.admin.users-component')
        ->layout('layouts.admin');
    }
}
