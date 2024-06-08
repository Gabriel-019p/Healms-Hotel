<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use App\Models\paydues;
use App\Models\user;
use App\Models\payment;

class Dashboard extends Component
{
    use WithPagination;

    public $query = '';
    public $payduesCount;
    public $user;
    public $payment;
    public $paymentAmount;
    public $paymentCount;
    public $userCount;
    public $paymentSummaries;
    public $limit = 5;


    protected $listeners = ['userLoggedIn'];

    public function mount()
    {
        $this->payment = payment::all();
        $this->payduesCount = Paydues::count();
        $this->paymentCount = payment::count();
        $this->paymentAmount = payment::sum('figure');
        $this->user = auth()->user();

        if (!Auth::check()) {
            // Redirect the user to the login page
            return Redirect::route('login');
        }
      
    }



    public function render()
    {    
        return view('livewire.dashboard', [
            'payments' => Payment::paginate(5),
        ]);
    }
}