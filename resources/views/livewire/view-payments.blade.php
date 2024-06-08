<div>
<h1 class="text-center uppercase mt-5 text-xl font-bold">View all Payments</h1>
<div class="lg:ml-10 lg:mr-10 mt-10 border-2 bg-white shadow-lg ">

<!--Search buttons-->
<div class="mb-3 mt-5 ml-10">
  <div class="relative mb-4 flex w-1/2 flex-wrap items-stretch">
    <input
      type="search"
      class="relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
      placeholder="Search"
      aria-label="Search"
      aria-describedby="button-addon1" />

    <!--Search button-->
    <button
      class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
      type="button"
      id="button-addon1"
      data-te-ripple-init
      data-te-ripple-color="light">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
        fill="currentColor"
        class="h-5 w-5">
        <path
          fill-rule="evenodd"
          d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
          clip-rule="evenodd" />
      </svg>
    </button>
  </div>
</div>
<!-- table content -->

<div class="ml-10 mr-10 mb-5">

<!--search button ends -->

<div class="overflow-x-auto">
    <table class="min-w-full text-left text-sm font-light mt-10 ">
        <thead class="border border-2 font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="px-6 py-4">Reservation ID</th>
                <th scope="col" class="px-6 py-4">Name</th>
                <th scope="col" class="px-6 py-4">Hotel Category</th>
                <th scope="col" class="px-6 py-4">Days</th>
                <th scope="col" class="px-6 py-4">Room Price</th>
                <th scope="col" class="px-6 py-4">Payment Date</th>
                <th scope="col" class="px-6 py-4">Arrival</th>
                <th scope="col" class="px-6 py-4">Departure</th>
                <th scope="col" class="px-6 py-4">Payment Method</th>
            </tr>
        </thead>
        @if ($payment->isEmpty())
        <p class="font-bold text-red-400 text-sm mt-10">No reservations found</p>
        @else
        <tbody>
            @foreach($payment as $payment)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $payment->hotelid}} </td>
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $payment->name}} </td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->room_type}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->no_room}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->amount}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->created_at}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->arrival}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->departure}}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $payment->payment_method}}</td>
            </tr>
            @endforeach
        </tbody>
        @endif
    </table>
</div>
  
</div>
</div>
