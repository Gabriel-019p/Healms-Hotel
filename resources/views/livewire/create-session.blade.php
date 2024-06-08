<div>
<div class="flex justify-center mt-3">
    <!-- Form -->
    <div class="bg-white rounded-md p-5 ">
        <form wire:submit.prevent="create" class="pt-5">
        @if($success)
            <div class="mt-6 inline-flex w-full items-center rounded-lg px-6 py-3 text-base text-green-700 bg-green-100" role="alert">
                <span class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                </span>
                {{ $success }}
            </div>
     @endif
        <div class="flex justify-center items-center mt-7">
            <label for="name" class="text-2xl font-medium leading-6 text-gray-900 text-center">CREATE HOTEL CATEGORY</label>
        </div>
                    <div class="mt-10 grid grid-cols-3 gap-x-6 gap-y-3 sm:grid-cols-3">
                <div>
                    <label>Category Name</label>
                    <input wire:model='name'  type="text" id="name" name="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Category name" required>
                    @error('name')
                        <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label>Amount</label>
                    <input wire:model='amount' type="number" id="amount" name="amount" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Category Amount" required>
                    @error('amount')
                        <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                <label>Amenities</label>
                    <input wire:model='amenities' type="text" id="amenities" name="amenities" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="E.g Wifi, Breakfast" required>
                    @error('amenities')
                        <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
         <div class="pt-3">
         <label>Description</label>
         <textarea wire:model='description' id="description" name="description" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 p-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Category description" required></textarea>
            @error('description')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
            </div>
            <div class="pt-5">

                    <div wire:loading wire:target="submit" >
                      <span class="text-green-500"> Sending..</span>
                    </div>
                </div>
            <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                Submit
            </button>
        </form>
    </div>
   
</div>
