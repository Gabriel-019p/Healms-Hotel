<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\make_session;
use App\Models\user;

use Livewire\Component;

class Paymentpage extends Component
{
    public $user;
    public $make_session;

    public $reference;
    public $user_id;
    public $name;
    public $email;
    public $phone;
    public $room_type;
    public $guests;
    public $no_room;
    public $arrival;
    public $departure;
    public $amount;
    public $level;
    public $figure;

   

    public $selectedpolice = null;

    public function generateUID()
    {
        $randomNumber = mt_rand(10000, 99999); // Generate a random number between 10000 and 99999
        return "HAS-" . $randomNumber;
    }

    public function mount()
    {
        $this->make_session = make_session::all();
        $this->user = Auth::user();

        if (!Auth::check()) {
            // Redirect the user to the login page
            return Redirect::route('admin-login');
        }
    }
  
    public function callback(Request $request)
    {   
       // Retrieve the authenticated user
       $user = Auth::user();

       //dd($request->all());
       $reference = $request->reference;
       $secret_key = env('PAYSTACK_SECRET_KEY');
       $curl = curl_init();
       curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
             "Authorization: Bearer $secret_key",
             "Cache-Control: no-cache",
          ),
       ));
       
       $response = curl_exec($curl);
       curl_close($curl);
       $response = json_decode($response);
        $meta_data = $response->data->metadata->custom_fields;
        //dd($response);
            // Check payment status
    if ($response->data->status == 'success') {
            // Create a new Payment object
    $payment = new Payment;

    // Populate payment fields from the response
    $payment->user_id = $user->id;
    $payment->hotelid = $this->generateUID();
    $payment->payment_reference= $reference;
    $payment->name = $meta_data[0]->value;
    $payment->email =  $meta_data[1]->value;
    $payment->phone = $meta_data[2]->value;
    $payment->room_type = $meta_data[3]->value;
    $payment->guests = $meta_data[4]->value;
    $payment->no_room = $meta_data[5]->value;
    $payment->arrival = $meta_data[6]->value;
    $payment->departure = $meta_data[7]->value;
    $payment->figure = $meta_data[8]->value;
    $payment->amount = $response->data->amount / 100;
    $payment->currency = $response->data->currency;
    $payment->payment_status = "Paid";
    $payment->payment_method = "Paystack";

    // Save the Payment object
    $payment->save();

  return redirect()->route('receipt')->with('success', 'Room Reservation was successful, Proceed to download your payment receipt');
    } else {
      return redirect()->route('cancel');
}

    }

     

        public function cancel(){
            return "Payment is cancelled";
    }

    public function render()
    {  
       
        return view('livewire.paymentpage');
    }
}
