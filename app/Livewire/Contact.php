<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use App\Models\message;

class Contact extends Component
{
    public $message;

    public $name;
    public $email;
    public $phone;
    public $description;
    public $success;
    public $error;
    protected $rules =[
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'description' => 'required|min:10',
    ];

    public function create()
    {
        
     $this->validate();

     message::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'description' => $this->description,
        ]);

        $this->reset(['name','email','phone','description']);
        $this->success = 'Success! Message submitted successfully';
        session()->flash('success','Message sent successfully');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
