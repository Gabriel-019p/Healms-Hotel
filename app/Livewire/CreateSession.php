<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\make_session;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CreateSession extends Component
{   
    
    public $name;
    public $amount;
    public $amenities;
    public $description;
    public $success;
    public $error;
    protected $rules =[
        'name' => 'required|unique:make_sessions',
        'amount' => 'required',
        'amenities' => 'required|max:10',
        'description' => 'required|max:50'
    ];

    public function create()
    {
        
     $this->validate();

     make_session::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'amenities' => $this->amenities,
            'description' => $this->description,
        ]);

        $this->reset(['name','amount','amenities','description']);
        $this->success = 'Sucess! Message submitted successfully';
        session()->flash('success','Message sent successfully');
    }

    public function mount()
    {
      

        if (!Auth::check()) {
            // Redirect the user to the login page
            return Redirect::route('login');
        }
    }

    public function render()
    {
        return view('livewire.create-session', ['make_sessions' => make_session::latest()->get()]);
    }
}
