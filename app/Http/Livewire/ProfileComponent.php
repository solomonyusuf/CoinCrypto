<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{   
    use WithFileUploads;
    
    public $data;
    public $roles;
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

    public function update()
    {
        $id = auth()->user()->id;

        if ($this->update_image) 
        {
            $this->validate([
                'update_image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);
            $imageName = uniqid() . '.' . $this->update_image->extension(); // Generate unique filename
            $this->update_image->move(public_path('uploads'), $imageName); 
            $this->add['image'] = 'uploads/' . $imageName;
        }
        
        $query = User::find($id);
        $query->update([
            'role_id' =>  $query->role_id,
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
        
        $this->redirect(route('profile'));
    }
    public function render()
    {
        $this->data = User::find(auth()->user()->id);
        $this->roles = Role::get();

        return view('livewire.profile-component');
    }
}
