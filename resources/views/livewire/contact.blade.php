<div>
<div class="lg:flex">
<form wire:submit.prevent="create" class="mt-5 lg:w-2/5 p-10 lg:ml-20">
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
<h1 class="ml-10 font-mono text-3xl mb-5">Get in touch</h1>
<div class="">
<div class="flex flex-col">
    <label for="arrival">Name</label>
<input wire:model='name' type="text" id="name" class="p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="name"/>
@error('name') 
<span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
@enderror
</div>  
<div class="flex flex-col pt-3">
    <label for="arrival">Email</label>
    <input wire:model='email' type="email" id="email" class="p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Email"/>
@error('email') 
<span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
@enderror
</div>
  <div class="flex flex-col pt-3">
    <label for="arrival">Phone Number</label>
    <input wire:model='phone' type="text" id="phone" class="p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="phone number" >
@error('phone') 
<span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
@enderror
</div>
<div class="mb-4">
<textarea
    class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
    wire:model='description'  id="description" rows="3" placeholder="Your message"></textarea>
@error('description') 
<span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
@enderror
</div>
    <button type="submit" class="mt-2 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0" onclick="payWithPaystack()">SUBMIT</button>
  </div>
</form>  
<div class="mt-10 ml-10 mr-10 lg:ml-20 mb-10">
    <h1 class="text-3xl font-mono">Welcome to Heams Apartment & Suites</h1>
    <div class="flex mt-10">
    <img src="image/telephone.png" alt="Edit" class="h-8">
    <div class="ml-10">
        <h1 class="text-sans">Customer Service</h1>
        <h1 class="text-xl text-blue-700">+2347054000007</h1>
    </div>
    </div>
    <div class="mt-5 flex">
    <img src="image/mail.png" alt="Edit" class="h-8">
    <div class="ml-10">
        <h1 class="text-sans">Email Address</h1>
        <h1 class="text-xl text-blue-700">heams@gmail.com</h1>
    </div>
    </div>
    <div class="mt-5 flex">
    <img src="image/placeholder (1).png" alt="Edit" class="h-8">
    <div class="ml-10">
       <h1 class="text-sans">Address</h1>
        <h1 class="text-xl text-blue-700">km 100, Benin Auchi Rd, Ewu-Esan Edo State.</h1>
    </div>
    </div>
</div>
</div>
</div>
