<?php

namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use App\Models\user;

class ClientRegister extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $pass;
    public $profile;
    public $confirmPass;
    public $error;
    protected $rules =[
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|unique:users|email',
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
            'profile'=> 'client',
            'password' => $hashPass,
        ]);

     if($user){
        session()->flash('success', 'Congratulations Member! Your registration was successful!');
        return redirect(route("admin-login"));
     }else{
        return $this->error = "Something went wrong ! Please try again later";
     }

        $this->reset(['first_name','last_name','email','pass','confirmPass']);
       
    }


    public function render()
    {
        return view('livewire.client-register');
    }
}
