<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbarr extends Component
{
    public function logoutUser()
    {
     Auth::logout();
 
     session()->flash('success', 'you are logged out sucessfully!!');
     return redirect(route('welcome'));
 
    }

    public function render()
    {
        return view('livewire.navbarr');
    }
}
