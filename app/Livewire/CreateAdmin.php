<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use App\Models\User;

class CreateAdmin extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $phone = '';
    public $role = '';
    public $address = '';
    public $pass = '';
    public $confirmPass = '';
    public $error = '';
    public $success = '';

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|numeric|min:10',
        'role' => 'required|string',
        'address' => 'required|string',
        'pass' => 'required|min:5|same:confirmPass',
        'confirmPass' => 'required'
    ];

    public function create()
    {

     $this->validate();
       $hashPass = Hash::make($this->pass);
       $user = user::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'role' => $this->role,
            'address' => $this->address,
            'profile'=> 'Admin',
            'password' => $hashPass,
        ]);

        if($user){
            session()->flash('success', 'You are registered successfully !');
            return redirect(route("view-dues"));
         }else{
            return $this->error = "Something went wrong ! Please try again later";
         }
    
            
           
        }

    public function render()
    {
        return view('livewire.create-admin');
    }
}
