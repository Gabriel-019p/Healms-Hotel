<div>
<body class="">
@if(Session::has("success"))
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <p class="mx-4 mt-3 text-center rounded-lg bg-success-100 px-6 py-3 text-base text-success-700">{{ Session::get("success") }}</p>
            </div>
        </div>
    </div>
@endif

    <!--container-->
   
<div class="mt-10">
    <h1 class="text-center">FILL IN INFORMATION TO RESERVE ROOM</h1>
<form id="paymentForm" class="border border-gray-300 lg:w-1/2 p-10 mt-5 lg:ml-80">
  
  <!----end --->
   <div class="lg:flex justify-between">
      <div>
          <label class="mr-40 font-mono text-lg">Name</label>
          <input wire:model="name" type="text" id="name" name="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Name" required>
         
      </div>
      <div>
      <label class="mr-40 font-mono text-lg">Email</label>
          <input wire:model="email" type="email" id="email" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ex: myname@example.com">
      </div>
      <div>
      <label class="mr-10 font-mono text-lg">Phone Number</label>
          <input wire:model="phone"  type="text" id="phone" name="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Phone Number">
      </div>
    </div>
    <!---end---->
    <div class="lg:flex justify-between">
      <div class="mt-5">
           <label class="mr-20 font-mono text-lg">Room Type</label>
          <input  type="text"  id="room_type"   name="room_type"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Room Type">
         
      </div>
      <div class="mt-5">
          <label class="mr-20 font-mono text-lg">Day staying</label>
          <input  wire:model="guests" type="number" id="guests" name="guests" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Days staying">
      </div>
      <div class="mt-4">
   <label class="mr-10 font-mono text-lg">Select Rooms</label>
    <select wire:model="no_room"  id="no_room" name="no_room" class="block w-full rounded-md border-0 py-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option value="">No of Rooms</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
      </select>
  </div>
    </div>
    <!---end---->
    <div class="lg:flex justify-between">
      <div class="mt-4">
      <label class="mr-10 font-mono text-lg">Arrival Date</label>
      <input type="date" name="date" id="arrival" placeholder="Select date" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
      <div class="mt-4">
        <label class="mr-10 font-mono text-lg">Departure Date</label>
      <input type="date" id="departure" name="date" placeholder="Select date" class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div> 
      <div class="mt-4">
        <label class="mr-10 font-mono text-lg">Room Price</label>
        <input wire:model="figure" type="number" id="figure" name="figure" oninput="calculateTotal()" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 " placeholder="Amount">
     </div> 
    </div>
   
    <div class="lg:flex mt-2 justify-between">
   <div class="flex">
      <div class="mt-6">
          Payment Summary:
      </div>
      <div>
          <input wire:model="amount" type="number" id="amount" name="amount" class="w-full ml-2 mt-5 text-xl font-bold" placeholder="" readonly>
         
      </div>
      
   </div>  
  </div>
    <!---end---->
          <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0"  onclick="payWithPaystack()">
              Make Reservation
          </button>
   </form>
      </div>
      <!-- Content for Tab 2 -->
   
</div>
        
       </div>

<!----------Amount javascript------------>
<script>
        function calculateAmount() {
            // Get the values of the inputs and convert them to numbers
            const guests = parseFloat(document.getElementById('guests').value) || 0;
            const noRoom = parseFloat(document.getElementById('no_room').value) || 0;
            const figure = parseFloat(document.getElementById('figure').value) || 0;

            // Calculate the amount
            const amount = guests * noRoom * figure;

            // Update the amount input
            document.getElementById('amount').value = amount;
        }

        // Ensure the script runs when the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', (event) => {
            // Attach event listeners to inputs
            document.getElementById('guests').addEventListener('input', calculateAmount);
            document.getElementById('no_room').addEventListener('input', calculateAmount);
            document.getElementById('figure').addEventListener('input', calculateAmount);
        });
    </script>
<!------javascript ends--------->

<!-----paystack ------->

<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!--------Javascript for Paystack------>
<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    
    function payWithPaystack(e) {
        e.preventDefault();
        
        // Get form data
        let formData = new FormData(paymentForm);
        let metadata = {};
        
        // Extract additional information from the form and add it to metadata
        formData.forEach((value, key) => {
            metadata[key] = value;
        });

        // Setup PaystackPop with metadata
        let handler = PaystackPop.setup({
            key: "{{ env('PAYSTACK_PUBLIC_KEY') }}", // Replace with your public key
            email: document.getElementById("email").value,
            amount: document.getElementById("amount").value * 100,
            metadata:{
                custom_fields:[
                    {
                        display_name:"name",
                        variable_name:"name",
                        value: document.getElementById("name").value
                    },
                    {
                        display_name:"email",
                        variable_name:"email",
                        value: document.getElementById("email").value
                    },
                    {
                        display_name:"phone",
                        variable_name:"phone",
                        value: document.getElementById("phone").value
                    },  
                    {
                        display_name:"room_type",
                        variable_name:"room_type",
                        value: document.getElementById("room_type").value
                    },
                    {
                        display_name:"guests",
                        variable_name:"guests",
                        value: document.getElementById("guests").value
                    },
                    {
                        display_name:"no_room",
                        variable_name:"no_room",
                        value: document.getElementById("no_room").value
                    },
                    {
                        display_name:"arrival",
                        variable_name:"arrival",
                        value: document.getElementById("arrival").value
                    },
                    {
                        display_name:"departure",
                        variable_name:"departure",
                        value: document.getElementById("departure").value
                    },
                    {
                        display_name:"figure",
                        variable_name:"figure",
                        value: document.getElementById("figure").value
                    }

                ]
            },
            
            onClose: function(){
                alert('Window closed.');
            },
            callback: function(response){
                // Redirect to the callback route with additional form data and payment reference
                //let redirectUrl = "{{ route('callback') }}" + response.redirecturl;
                // Convert metadata object to query string
                //let queryString = Object.keys(metadata).map(key => key + '=' + metadata[key]).join('&');
                //window.location.href = redirectUrl + '?' + queryString;
                
                window.location.href= "{{ route('callback') }}" + response.redirecturl;
            
                // Reset form fields after successful payment
                paymentForm.reset();
            }
        });

        handler.openIframe();
    }
</script>

    </body>
</div>
