<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\payment;

class ViewPayments extends Component
{
    public $payment;

    public function mount()
    {
        $this->payment = payment::all();
        
        if (!Auth::check()) {
            // Redirect the user to the login page
            return Redirect::route('login');
        } 
    }


    public function render()
    {
        $payment = $this->payment;
        return view('livewire.view-payments', ['payment' => $payment]);
    }
}
