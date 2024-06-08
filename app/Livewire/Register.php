<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\police;
use App\Models\make_sessions;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;
    public $make_sessions;
    public $name;
    public $category_id;
    public $success;
    public $error;
    protected $rules =[
        'name' => 'required|min:5|unique:users',
        'category_id' => 'required', 
    ];

    public function create()
    {
        
     $this->validate();

        police::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
        ]);

        $this->reset(['name','category_id']);
        $this->success = 'Sucess! Message submitted successfully';
        session()->flash('success','Message sent successfully');
    }

    

    public function render()
    {
        // Fetch data when rendering the component
        return view('livewire.register', ['polices' => police::latest()->get()]);
        
    }
}
