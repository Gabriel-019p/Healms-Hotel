
<div>
<!--<img src="image/heams1.png" alt="Edit" class="h-20 w-20 inline-block">-->
 <!-- Form -->
 <div class="flex justify-center items-center h-screen">

    <div class="border-solid border-2 border-sky-500 rounded-md w-2/5 p-10">
    @if(Session::has("success"))
    <p class="mb-3 w-full text-center rounded-lg bg-success-100 px-6 py-3 text-base text-success-700">{{Session::get("success")}}</p>
    @endif
    @if($error)
     <p class="mb-3 w-full text-center rounded-lg bg-danger-100 px-6 py-3 text-base text-danger-700">{{$error}}</p>
    @endif
    <h1 class="text-center font-bold text-lg">Heams Hotel</h1>
    <h1 class="text-center font-bold text-2xl pt-6">SUPER ADMIN PORTAL</h1>
        <form wire:submit.prevent="login" class="pt-7">
        <div>
            <label for="name" class="text-sm leading-6 text-gray-900">Email</label>
            <input wire:model='email' type="text" id="email" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter email address">
            @error('email')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="name" class="text-sm leading-6 text-gray-900">Password</label>
            <input wire:model='pass' type="password" id="pass" name="pass" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter password">
            @error('pass')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
            <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                Submit
            </button>
     </form>
        
    </div>
</div>
</div>
