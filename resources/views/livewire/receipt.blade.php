<div>
@if(Session::has("success"))
    <p class="mb-3 w-full text-center rounded-lg bg-success-100 px-6 py-3 text-base text-success-700 mt-5">{{Session::get("success")}}</p>
 @endif

 <h1 class="text-center mt-10 text-xl">PAYMENT RECEIPTS</h1>
<div class="lg:ml-40 lg:mr-40 mt-5 border-2 bg-white shadow-lg ">

<!-- table content -->

<div class="ml-10 mr-10 mb-5">

<!--search button ends -->

<div class="overflow-x-auto">
    <table class="min-w-full text-left text-sm font-light mt-10 ">
        <thead class="border border-2 font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="px-6 py-4">Reservation ID</th>
                <th scope="col" class="px-6 py-4">Hotel Category</th>
                <th scope="col" class="px-6 py-4">Room Price</th>
                <th scope="col" class="px-6 py-4">Payment Date</th>
                <th scope="col" class="px-6 py-4">Download</th>
            </tr>
        </thead>
        @if ($payment->isEmpty())
        <p class="font-bold text-red-400 text-sm mt-10">No reservations found</p>
        @else
        <tbody>
            @foreach($payment as $payment)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $payment->hotelid}} </td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->room_type}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->amount}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->created_at}}</td>
                <td class="whitespace-nowrap px-6 py-4">
                    <button wire:click="generatePdf({{ $payment->id }})" class="text-black px-4 py-2 font-bold">
                        <img src="image/downloads1.png" alt="Edit" class=" h-4">
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
        @endif
    </table>
</div>
  
</div>
