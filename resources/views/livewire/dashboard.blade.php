<div>
    <div class=" h-screen ml-8 mr-8 bg-[#F1F1F1]">  
    @if(Session::has("success"))
       @include('alert.success')
    @endif
    <div class="flex  justify-between">
        <div class="flex pt-10 pl-20 ">
        @if($user)
        <h1 class="text-3xl font-bold">Welcome Admin  "{{ $user->first_name}}"! </h1>
        <div class="pl-4"> <img src="image/happiness.png" alt="Edit" class=" h-10 inline-block mr-2"></div> 
        @endif
      </div>
      <div class=" ">
          <h2 class="text-3xl text-center font-bold pt-10 pr-20"><img src="image/naira.png" alt="Delete" class="w-6 h-6 inline-block">{{ $paymentAmount ?? 0 }}</h2>
      </div>
</div>

    <div class="border-2 border-rose-500 mr-20 ml-20  justify-between mt-5 text-black ">
        <div class="flex p-7 justify-between">
        <div class="border-2 w-1/5 h-25 rounded-lg p-2 bg-[#FFC55A] flex flex-col items-center">
        <img src="image/gross.png" alt="Edit" class="h-6 mb-2">
        <h2 class="text-sm text-center">Admins created</h2>
        <h2 class="text-3xl text-center font-bold">{{ $payduesCount ?? 0}}</h2>
        </div>

            <div class="border-2 w-1/5 h-25 rounded-lg p-2 bg-[#A3D8FF] flex flex-col items-center">
            <img src="image/occupied.png" alt="Edit" class="h-5 mb-2">
            <h2 class="text-sm text-center">Total Number of Payment</h2>
            <h2 class="text-3xl text-center font-bold">{{ $paymentCount ?? 0}}</h2>
            </div>

            <div class="border-22 w-1/5 h-25 rounded-lg p-2 bg-[#77B0AA] flex flex-col items-center">
            <img src="image/reserve.png" alt="Edit" class="h-6 mb-2">
            <h2 class="text-sm text-center">Total Amount of Payment</h2>
            <h2 class="text-3xl text-center font-bold">{{ $paymentAmount ?? 0}}</h2>
            </div>
        </div>
    </div>
    <!---table-->
<div class="bg-white mr-20 ml-20 mt-10 p-5">
<div>
<h1 class="pt-10  text-lg text-center">Heams Apartment & Suites Data Representation</h1>   
<h1 class="ml-40 text-blue-500 text-bold"><a href="view-payments">View All</a></h1>
<div class="flex flex-col ml-40">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block w-5/6 py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center text-sm font-light mt-5">
          <thead
            class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
            <tr>
              <th scope="col" class=" px-6 py-4">#</th>
              <th scope="col" class=" px-6 py-4">Hotel ID</th>
              <th scope="col" class=" px-6 py-4">Name</th>
              <th scope="col" class=" px-6 py-4">Amount Paid</th>
              <th scope="col" class=" px-6 py-4">Payment Method</th>
              <th scope="col" class=" px-6 py-4">Action</th>
            </tr>
          </thead>
          <tbody>
               <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($payment as $payment)
                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-center"></td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-center">{{ $payment->hotelid }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-center">{{ $payment->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-center">{{ $payment->amount }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-center">{{ $payment->payment_method }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-center text-green-500 font-bold">{{ $payment->payment_status }}</td>
                            </tr>
                            @endforeach
                 </tbody>
                 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
  {{ $payments->links() }}
</div>