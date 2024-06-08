<div>
       <!-- Form -->
<div class="flex justify-center items-center mt-20">

<div class="w-2/5 p-10">
<div class="flex items-center justify-center">
    <img src="image/padlock2.png" alt="Edit" class="h-14 inline-block">
</div>
@if(Session::has("success"))
<p class="mb-3 w-full text-center rounded-lg bg-success-100 px-6 py-3 text-base text-success-700">{{Session::get("success")}}</p>
@endif
@if($error)
 <p class="mb-3 w-full text-center rounded-lg bg-danger-100 px-6 py-3 text-base text-danger-700">{{$error}}</p>
@endif
<h6 class="text-center text-sm pt-3 font-bold">RESET ADMIN PASSWORD</h6>
    <form wire:submit.prevent="updatePassword" class="pt-7">
    <div class="flex mt-3">
    <div class="mr-2 w-1/2">
      <label class="text-sm">New Password</label>
        <input wire:model='password' type="password" id="password" name="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Password">
        @error('password')
            <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
        @enderror
    </div>
    <div class="w-1/2">
       <label class="text-sm">Confirm Password</label>
        <input wire:model='confirmPassword' type="password" id="confirmPassword" name="confirmPassword" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Confirm Password">
        @error('confirmPassword')
            <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
        @enderror
    </div>
</div>
        <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
            RESET PASSWORD
        </button>
 </form>

</div>
</div>
</div>
