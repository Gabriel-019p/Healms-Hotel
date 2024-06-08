<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\paydues;

class Editdues extends Component
{
    public $paydues;
    public $payduesId;
    public $email;
    public $role;
    public $phone;
    public $address;

    public $success;

    public function mount($payduesId)
    {
        $this->paydues = Paydues::find($payduesId);
    }

    public function update()
    {
        $validatedData = $this->validate([
            
            'email' => 'required|min:5',
            'role' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $paydues = Paydues::findOrFail($this->payduesId);
        $paydues->update($validatedData);

        

        session()->flash('success', 'Data updated succcessfully updated successfully.');

                // Reset form data after successful submission
            $this->reset(['email', 'role', 'phone','address']);
                
    }

    public function render()
    {   
        
        $paydues = $this->paydues;
        return view('livewire.editdues', ['paydues' => $paydues]);
    }
}
