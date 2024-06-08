<div>

<body id="content" class="">
    <h2 class="ml-10 font-semibold text-xl leading-7 text-gray-900 mt-5">UPDATE ADMIN INFORMATION</h2>
    @if (session()->has('success'))
                        <div class="alert alert-success text-center rounded-lg bg-success-100 px-4 py-2 text-base text-success-700">{{ session('success') }}</div>
    @endif
        <div class="w-full pl-30 border border-gray-300 focus:border-blue-500 error:border-red-500 p-10 mt-5 rounded-lg">
      
            <form wire:submit.prevent="update" class="border border-gray-300 p-3 rounded-lg">
            <h2 class="text-xl leading-7 text-gray-900 font-bold ">ADMIN Information</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-3"> <!-- Changed sm:grid-cols-2 to sm:grid-cols-3 -->
                    <div class="sm:col-span-1">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                        <div class="mt-2">
                            <input wire:model='first_name' readonly disabled  type="text" id="first_name" name="first_name" value="{{ $paydues->first_name }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Enter First Name" required>
                        </div>
                        @error('first_name')
                        <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code"
                            class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                        <div class="mt-2">
                            <input wire:model='last_name' readonly disabled type="text" id="last_name" name="last_name" value="{{ $paydues->last_name }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Enter Last Name" required>
                        </div>
                        @error('last_name')
                        <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-1">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                        <div class="mt-2">
                            <input wire:model='email' type="text" id="email" name="email" value="{{ $paydues->email }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Enter Email" required>
                        </div>
                        @error('email')
                        <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Continue with the rest of your form elements following this pattern -->
                </div>
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-3"> <!-- Changed sm:grid-cols-2 to sm:grid-cols-3 -->
                <div class="sm:col-span-1">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Job Role</label>
                        <div class="mt-2">
                            <input wire:model='role' type="text" id="role" name="role" value="{{ $paydues->role }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Enter Job Role" required>
                        </div>
                        @error('role')
                        <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-1">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                        <div class="mt-2">
                            <input wire:model='phone' type="text" id="phone" name="phone" value="{{ $paydues->phone }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="phone" required>
                        </div>
                        @error('phone')
                        <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code"
                            class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                        <div class="mt-2">
                            <input wire:model='address' type="text" id="address" name="address" value="{{ $paydues->address }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="Enter Due Amount" required>
                        </div>
                        @error('address')
                        <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Continue with the rest of your form elements following this pattern -->
                </div>
               
                    <button type="submit" class="mt-6 w-full justify-center inline-block w-70 rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                    Update
                    </button>
                </div>
            </form>
        </div>
    </body>


</div>
