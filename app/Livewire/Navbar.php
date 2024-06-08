<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Navbar extends Component
{
   public function logoutUser()
   {
    Auth::logout();

    session()->flash('success', 'you are logged out sucessfully!!');
    return redirect(route('admin-login'));

   }

    public function render()
    {
        return view('livewire.navbar');
    }
}
