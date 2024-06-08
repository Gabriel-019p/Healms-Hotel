<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\police;

class Viewschool extends Component
{
    public $police;

    public function mount()
    {
        $this->police = police::all();
    }

    public function render()
    {
        $police = $this->police;
        return view('livewire.viewschool', ['police' => $police]);
    }
}
