<div>
@if($success)
            <div class="mt-6 inline-flex w-full items-center text-center rounded-lg px-6 py-3 text-base text-green-700 bg-green-100" role="alert">
                <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                </span>
                {{ $success }}
            </div>
@endif
<h1 class="text-center mt-10">FILL IN INFORMATION TO BOOK ROOM</h1>
<form wire:submit.prevent="create" class="border border-gray-300 lg:w-1/2 p-10 mt-5 lg:ml-80">
  
  <!----end --->
   <div class="lg:flex justify-between">
      <div>
          <label class="mr-40 font-mono text-lg">Name</label>
          <input wire:model="name" type="text" id="name" name="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Name">
          @error('name') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
         @enderror
      </div>
      <div>
      <label class="mr-10 font-mono text-lg">Phone Number</label>
          <input wire:model="phone"  type="text" id="phone" name="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Phone Number">
      @error('phone') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
      @enderror
      </div>
      <div>
      <label class="mr-10 font-mono text-lg">Room Type</label>
          <input wire:model="room_type"  type="text" id="room_type" name="room_type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Phone Number">
      @error('room_type') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
      @enderror
      </div>
    </div>
    <!---end---->
    <div class="lg:flex justify-between">
      <div class="mt-5">
          <label class="mr-20 font-mono text-lg">Day staying</label>
          <input  wire:model="guests" type="number" id="guests" name="guests" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Days staying">
          @error('guests') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
          @enderror
        </div>
      <div class="mt-4">
   <label class="mr-10 font-mono text-lg">Select Rooms</label>
    <select wire:model="no_room"  id="no_room" name="no_room" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option value="">No of Rooms</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
      </select>
      @error('no_room') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
      @enderror
  </div>
  <div class="mt-4">
      <label class="mr-10 font-mono text-lg">Arrival</label>
          <input wire:model="arrival"  type="date" id="arrival" name="arrival" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Arrival">
      @error('arrival') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
      @enderror
      </div>
    </div>
    <!---end---->
    <div class="lg:flex justify-between">
    <div class="mt-4">
      <label class="mr-10 font-mono text-lg">Departure</label>
          <input wire:model="departure"  type="date" id="departure" name="departure" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Departure">
      @error('departure') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
      @enderror
      </div>
      <div class="mt-4">
        <label class="mr-10 font-mono text-lg">Room Price</label>
        <input wire:model="amount" type="number" id="amount" name="amount"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 " placeholder="Amount">
        @error('amount') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
        @enderror 
    </div> 
     <div class="mt-4">
   <label class="mr-10 font-mono text-lg">Payment Method</label>
    <select wire:model="payment_method"  id="payment_method" name="payment_method" class="block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
          <option value="">Choose Method</option>
          <option value="Cash">Cash</option>
          <option value="POS">POS</option>
          <option value="Transfer">Transfer</option>
      </select>
      @error('payment_method') 
            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
      @enderror
  </div>
    </div>
   
    
    <!---end---->
          <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
              Submit
          </button>
   </form>
      </div>
</div>
