<?php

namespace App\Http\Livewire;

use App\Http\Controllers\UploadController;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

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

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $query = User::find($id);

        $imageName = $query->image;

        if ($request->image) 
        {
          $imageName = UploadController::UploadFile($request);
        }
        
        $query->update([
            'role_id' =>  $query->role_id,
            'image' => $imageName,
            'info' => $request->info, 
            'linkedin' =>  $request->linkedin,
            'twitter' =>  $request->twitter,
            'first_name' =>  $request->first_name,
            'last_name' =>  $request->last_name,
            'email' =>  $query->email,
            'password' =>  !$request->password ? $query->password :  bcrypt( $request->password),
        ]);
        $query->save();

        toast('Update Successful', 'success');
        
        return redirect()->back();
    }
    public function render()
    {
        $this->data = User::find(auth()->user()->id);
        $this->roles = Role::get();

        return view('livewire.profile-component');
    }
}
