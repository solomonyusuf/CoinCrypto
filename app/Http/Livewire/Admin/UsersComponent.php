<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\UploadController;
use App\Mail\AppMail;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
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

    public function create(Request $request)
    {
        $query = User::where(['email'=> $request->email])->first();

        if($query)
        {
            toast('User Already Exist', 'success');

            return redirect()->back();
        }

        $imageName = null;

        if ($request->image) 
        {
          $imageName = UploadController::UploadFile($request);
        }
        
        $entity = User::create([
            'role_id' =>  $request->role_id,
            'image' => $imageName,
            'info' => $request->info, 
            'linkedin' =>  $request->linkedin,
            'twitter' =>  $request->twitter,
            'first_name' =>  $request->first_name,
            'last_name' =>  $request->last_name,
            'email' =>  $request->email,
            'password' =>  bcrypt( $request->password),
        ]);

        $temp = route('login');
        Mail::to($entity->email)->send(new AppMail(
            'Account Sign up',
            "
            <p>Welcome to our platform! Your account has been successfully created.</p>
                <p>To get started, check your credentials below.</p>
                <p>your email is {$entity->email}.</p>
                <p>your password is {$request->password}.</p>
                <a href=\"{$temp}\" class=\"button\">Access Account</a>"
        ));

        toast('Creation Successful', 'success');
        
        return redirect()->back();
    }
   
    public function update($id, Request $request)
    {
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
