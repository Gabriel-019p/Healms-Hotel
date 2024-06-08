<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\make_session;
use App\Models\user;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class Receipt extends Component
{
    public $payment;
    public $user;

    public function mount()
    {
        $this->make_session = make_session::all();
        $this->user = Auth::user();
        $this->loadPayments();
       
    }

    public function loadPayments()
    {
        // Retrieve payments associated with the authenticated user
        $this->payment = Payment::where('user_id', $this->user->id)->get();
    }

    public function generatePdf($paymentId)
    {
      $payment = Payment::find($paymentId);
  
      // Generate PDF content using a library like Dompdf or another preferred library
      $pdf = PDF::loadView('generatePdf', ['payment' => $payment]);
  
      return response()->streamDownload(function() use($pdf){
          echo $pdf->stream();
      }, 'heams-reservation-receipt.pdf');
    }

    public function render()
    {
        $this->loadPayments();

        return view('livewire.receipt',  [
            'payment' => $this->payment,
        ]);
}

}
