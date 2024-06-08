
<div>
@if($error)
     <p class="mb-3 w-full text-center rounded-lg bg-danger-100 px-6 py-3 text-base text-danger-700">{{$error}}</p>
@endif
<!--<img src="image/heams1.png" alt="Edit" class="h-20 w-20 inline-block">-->
<div class="lg:flex justify-center">
    <!-- Pill Tabs -->
    <div class="lg:flex mt-5">
        <!-- First Pill Tab -->
        <div id="tab1" class="pill-tab cursor-pointer mr-2 py-3 px-3 bg-gray-200 text-gray-700">
          Member login
        </div>
        <!-- Second Pill Tab -->
        <div id="tab2" class="pill-tab cursor-pointer py-3 px-3  bg-gray-200 text-gray-700">
           Admin Login
        </div>
    </div>
</div>
<div id="tabContent" class="mt-5 text-center">
    <!-- Content for Tab 1 -->
    <div id="content1" class="tab-content hidden">
        <!-- Data for Tab 1 -->
<div class="lg:ml-40 mr-40 ">
@if(Session::has("success"))
    <p class="mb-3 w-full text-center rounded-lg bg-success-100 px-6 py-3 text-base text-success-700">{{Session::get("success")}}</p>
    @endif
</div>
<form wire:submit.prevent="loginn" class="border border-gray-300 lg:w-1/2 p-10 lg:ml-80">
<h1 class="font-bold text-black border-b p-2">MEMBER LOGIN</h1>
<h1 class="font-bold text-sm p-2">Login to make reservation</h1>
 <div class="pt-5">
    <div>
    <label class="font-mono text-lg text-left">Email</label>
        <input wire:model="email" type="email" id="email" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ex: myname@example.com">
    </div>
    <div class="pt-2">
            <label for="name" class="text-sm leading-6 text-gray-900">Password</label>
            <input wire:model='pass' type="password" id="pass" name="pass" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter password">
            @error('pass')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
    </div>
    
</div>
  <!---end---->
        <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
            Login
        </button>
    <h1 class="pt-2">Not a Member?<span class="pl-2 text-[#0C359E] font-bold"><a href="member-register">Signup</a><span></h1>
 </form>
    </div>
    <!-- Content for Tab 2 -->
    <div id="content2" class="tab-content hidden">
        <!-- Data for Tab 2 -->
<form wire:submit.prevent="login" class="border border-gray-300 md:w-1/2 p-10 lg:ml-80">
<h1 class="font-bold text-black border-b p-2">ADMIN LOGIN</h1>
 <div class="pt-5">
    <div>
    <label class="font-mono text-lg text-left">Email</label>
        <input wire:model="email" type="email" id="email" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ex: myname@example.com">
    </div>
    <div class="pt-2">
            <label for="name" class="text-sm leading-6 text-gray-900">Password</label>
            <input wire:model='pass' type="password" id="pass" name="pass" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter password">
            @error('pass')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
    </div>
    
</div>
  <!---end---->
        <button type="submit" class="mt-6 inline-block w-full rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
            Login
        </button>
 </form>
       
    </div>
</div>

<!-- JavaScript -->
<script>
    // Function to handle tab selection
    function selectTab(tabId) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(function(content) {
            content.classList.add('hidden');
        });

        // Remove active class from all tabs
        document.querySelectorAll('.pill-tab').forEach(function(tab) {
            tab.classList.remove('bg-blue-800', 'text-white');
            tab.classList.add('bg-gray-200', 'text-gray-700');
        });

        // Show selected tab content
        document.getElementById('content' + tabId).classList.remove('hidden');
        
        // Add active class to selected tab
        document.getElementById('tab' + tabId).classList.remove('bg-gray-200', 'text-gray-700');
        document.getElementById('tab' + tabId).classList.add('bg-blue-800', 'text-white');
    }

    // Event listeners for tab clicks
    document.getElementById('tab1').addEventListener('click', function() {
        selectTab(1);
    });

    document.getElementById('tab2').addEventListener('click', function() {
        selectTab(2);
    });

    // Initial selection
    selectTab(1); // Select Tab 1 by default
</script>

<!-- Form -->
</div>


