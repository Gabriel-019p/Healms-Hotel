<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\paydues;
use Livewire\Component;
use App\Models\user;

class AdminLogin extends Component
{   
    public $error = '';
    public $email = '';
    public $pass = '';
    protected $rules = [
      'email' => 'required|email',
      'pass' => 'required'
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->pass])) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check if the user has the 'super-admin' profile
            if ($user->profile === 'Admin') {
                session()->flash('success', 'You are logged in successfully!');
                return redirect()->route('bookings');
            } else {
                // Log the user out if they do not have the 'super-admin' profile
                Auth::logout();
                $this->pass = '';
                $this->email = '';
                $this->error = 'You do not have the required permissions to log in.';
            }
        } else {
            // Authentication failed
            $this->pass = '';
            $this->email = '';
            $this->error = 'Invalid Email or Password!';
        }
    }

    
    public function loginn()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->pass])) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check if the user has the 'super-admin' profile
            if ($user->profile === 'client') {
                session()->flash('success', 'You are logged in successfully!');
                return redirect()->route('welcome');
            } else {
                // Log the user out if they do not have the 'super-admin' profile
                Auth::logout();
                $this->pass = '';
                $this->email = '';
                $this->error = 'You do not have the required permissions to log in.';
            }
        } else {
            // Authentication failed
            $this->pass = '';
            $this->email = '';
            $this->error = 'Invalid Email or Password!';
        }
    }

    public function render()
    {
        return view('livewire.admin-login');
    }
}
