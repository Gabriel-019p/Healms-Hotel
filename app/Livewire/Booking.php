<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\payment;

class Booking extends Component
{
    public $payment;

    public $name;
    public $phone;
    public $room_type;
    public $guests;
    public $no_room;
    public $arrival;
    public $departure;
    public $amount;
    public $payment_method;
    public $success;
    public $error;
    protected $rules =[
        'name' => 'required',
        'phone' => 'required',
        'room_type' => 'required',
        'guests' => 'required', 
        'no_room' => 'required', 
        'arrival' => 'required',
        'departure' => 'required',  
        'amount' => 'required', 
        'payment_method' => 'required', 
    ];

    public function create()
    {
        
     $this->validate();

        payment::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'room_type' => $this->room_type,
            'guests' => $this->guests,
            'no_room' => $this->no_room,
            'arrival' => $this->arrival,
            'departure' => $this->departure,
            'amount' => $this->amount,
            'payment_method' => $this->payment_method,
            'payment_status'=> 'Paid',
            'currency'=> 'NGN',
            'hotelid'=> 'Heams-Admin',
        ]);

        $this->reset(['name','phone','room_type','guests','no_room','arrival','departure','amount','payment_method']);
        $this->success = 'Sucess! Message submitted successfully';
        session()->flash('success','Message sent successfully');
    }


    public function render()
    {
        return view('livewire.booking');
    }
}
