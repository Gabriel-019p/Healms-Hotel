
<div>
<a href="view-dues"><img src="image/turn-back.png" alt="Edit" class="w-5 h-5 inline-block mr-2 ml-20 mt-5"></a>
    <body id="content" class="">
    <h2 class="ml-10 font-semibold text-xl leading-7 text-gray-900 mt-5">CREATE HEAMS HOTEL ADMIN</h2>
        <div class="w-full pl-30 border border-gray-300 focus:border-blue-500 error:border-red-500 p-10 mt-5 rounded-lg">
        @if($success)
              <div
                class="mb-3 inline-flex lg:w-full items-center rounded-lg px-6 py-5 text-base text-success-700"
                role="alert">
                <span class="mr-2">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5">
                    <path
                      fill-rule="evenodd"
                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                      clip-rule="evenodd" />
                  </svg>
                            </span>
                    {{ $success }}
                        </div>
        @endif
<form wire:submit.prevent="create" class="border border-2 p-10 rounded">
    <div class="mt-2">
        <h1 class="text-sm font-medium text-gray-900 font-bold">ADMIN INFORMATION</h1>
    </div>
    <div class="grid grid-cols-3 gap-x-6 gap-y-3 sm:grid-cols-3 mt-3">
        <div>
            <label for="first_name">First Name</label>
            <input wire:model="first_name" type="text" id="first_name" name="first_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter First Name">
            @error('first_name')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input wire:model="last_name" type="text" id="last_name" name="last_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Last Name">
            @error('last_name')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input wire:model="email" type="email" id="email" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Email">
            @error('email')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-3 gap-x-6 gap-y-3 sm:grid-cols-3 mt-3">
        <div>
            <label for="phone">Enter Phone Number</label>
            <input wire:model="phone" type="text" id="phone" name="phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Phone Number">
            @error('phone')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="role">Role</label>
            <input wire:model="role" type="text" id="role" name="role" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Role">
            @error('role')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="address">Address</label>
            <input wire:model="address" type="text" id="address" name="address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Address">
            @error('address')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <h1 class="text-sm font-medium text-gray-900 font-bold mt-8">CREATE CREDENTIALS</h1>
    <div class="grid grid-cols-3 gap-x-6 gap-y-3 sm:grid-cols-3 mt-3">
        <div>
            <label for="password">Password</label>
            <input wire:model="pass" type="password" id="password" name="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Password">
            @error('pass')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="confirmPass">Confirm Password</label>
            <input wire:model="confirmPass" type="password" id="confirmPass" name="confirmPass" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Confirm Password">
            @error('confirmPass')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="pt-5">
        <div wire:loading wire:target="submit">
            <span class="text-green-500"> Sending..</span>
        </div>
    </div>
    <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
        Submit
    </button>
</form>

        </div>
    </body>
</div>
