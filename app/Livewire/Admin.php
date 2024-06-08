<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use App\Models\administration;

class Admin extends Component
{

    public $name;
    public $email;
    public $role;
    public $pass;
    public $profile;
    public $confirmPass;
    public $success; 
    public $error;
    protected $rules =[
        'name' => 'required|min:5',
        'email' => 'required|unique:users|email',
        'role' => 'required',
        'pass' => 'required|min:5|same:confirmPass',
        'confirmPass' => 'required'
    ];


    public function create()
    {
   
     $this->validate();

        $hashPass = Hash::make($this->pass);
        $administration = administration::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'password' => $hashPass,
        ]);

        $this->success = 'Sucess! Message submitted successfully';
        session()->flash('success','Message sent successfully');

        $this->reset(['name','email','role','pass','confirmPass']);
       
    }

    public function render()
    {
        return view('livewire.admin');
    }


}
