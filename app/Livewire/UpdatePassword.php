<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\paydues;

class UpdatePassword extends Component
{
    public $paydues;
    public $payduesId;
    public $password;
    public $confirmPassword;
    public $error;

    public $success;

    public function mount($payduesId)
    {
        $this->paydues = Paydues::find($payduesId);
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|min:5|same:confirmPassword',
            'confirmPassword' => 'required'
        ]);

        $paydues = Paydues::findOrFail($this->payduesId);
        $paydues->password = bcrypt($this->password);
        $paydues->save();

        session()->flash('success', 'Password updated successfully.');
        $this->reset();
    }

    public function render()
    {
        
        return view('livewire.update-password');
    }
}
