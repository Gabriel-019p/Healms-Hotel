<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\make_session;

class Rooms extends Component
{
    public $make_session;
    
    public function mount()
    {
        $this->make_session = make_session::all();
      
    }

    public function render()
    {
        return view('livewire.rooms');
    }
}
