<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\paydues;
use App\Models\police;
class Viewdues extends Component
{

    public $paydues;

    public function mount()
    {
        $this->paydues = paydues::all();
        
        if (!Auth::check()) {
            // Redirect the user to the login page
            return Redirect::route('login');
        } 
    }

    public function render()
    {
        $paydues = $this->paydues;
        return view('livewire.viewdues', ['paydues' => $paydues]);
    }
}
