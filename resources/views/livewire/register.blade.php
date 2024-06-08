<div>
<div class="flex justify-center mt-3">
    <!-- Form -->
    <div class="bg-white rounded-md w-2/3">
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
        <form wire:submit.prevent="create" class="mt-5 border border-gray-300 rounded-lg p-6">
            <label for="name" class="text-lg font-medium leading-6 text-gray-900">Create Rooms</label>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-2"> <!-- Changed sm:grid-cols-2 to sm:grid-cols-3 -->
                    <div class="sm:col-span-1">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Room number</label>
                        <div class="mt-2">
                        <input wire:model='name' type="text" id="name" name="name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Enter Room Number" >   
                        </div>
                        @error('name') 
                        <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900 pt-3">Hotel Category</label>
                    <select wire:model='make_sessions' id="" name="make_sessions" 
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="">Select Category</option>
                                
                    </select>
                    </div>
                    <!-- Continue with the rest of your form elements following this pattern -->
                </div>
            <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                Submit
            </button>
        </form>
    </div>
    <!-- Table -->

</div>
