<div>

  <!-- Main navigation container -->
  <div>
    <nav class="relative fixed flex fixed z-50 w-full h-20 flex-nowrap items-center bg-[#00224D] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:flex-wrap lg:justify-start lg:py-4" data-te-navbar-ref>
      <div class="ml-5 md:ml-20 flex justify-between">
        <!-- Left links -->
        <h1 class="text-xl font-bold text-white font-mono">HEALMS APARTMENT & SUITES</h1>
        <ul class="hidden justify-between ml-20 list-style-none lg:flex flex-col pl-0 lg:mt-1 lg:flex-row" data-te-navbar-nav-ref>
          <!-- Home link -->
          <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
            <a class="active disabled:text-black/30 lg:px-2 dark:[&.active]:text-neutral-400 text-white" aria-current="page" href="/" data-te-nav-link-ref>Home</a>
          </li>
          <span>|</span>
          <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
            <a class="active disabled:text-black/30 lg:px-2 dark:[&.active]:text-neutral-400 text-white" aria-current="page" href="about-us" data-te-nav-link-ref>About Us</a>
          </li>
          <span>|</span>
          <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
            <a class="active disabled:text-black/30 lg:px-2 dark:[&.active]:text-neutral-400 text-white" aria-current="page" href="rooms" data-te-nav-link-ref>Rooms</a>
          </li>
          <span>|</span>
          <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
            <a class="active disabled:text-black/30 lg:px-2 dark:[&.active]:text-neutral-400 text-white" aria-current="gallery" href="gallery" data-te-nav-link-ref>Gallery</a>
          </li>
          <span>|</span>
          <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
            <a class="active disabled:text-black/30 lg:px-2 dark:[&.active]:text-neutral-400 text-white" aria-current="" href="/" data-te-nav-link-ref>Recreational Facilities</a>
          </li>
          <span>|</span>
          <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
            <a class="active disabled:text-black/30 lg:px-2 dark:[&.active]:text-neutral-400 text-white" aria-current="" href="contact-us" data-te-nav-link-ref>Contact Us</a>
          </li>
          <span>|</span>
          <!-- other links... -->
          <li class="mb-4 ml-5 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref>
            <a class="p-3 bg-white rounded text-black font-mono font-bold" href="rooms" data-te-nav-link-ref>BOOK NOW</a>
          </li>
        </ul>
      </div>
       <div class="ml-10"><span class="lg:hidden text-4xl" style="font-size: 30px; cursor: pointer;" onclick="openNav()">&#9776;</span></div>
    </nav>

    <nav class="relative fixed flex justify-between z-50 w-full h-12 flex-nowrap bg-white py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:flex-wrap lg:justify-start lg:py-4" data-te-navbar-ref>
      <div class="ml-5 md:ml-20">
        @auth
        <!-- Authenticated links... -->
        <div class="flex">
   <div>
    <p class="text-sm font-bold text-black">Welcome, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
   </div>
   <div class="ml-3">
   <div x-data="{ open: false }" class="relative inline-block text-left">
        <button @click="open = !open" @click.away="open = false" class="">
        <img src="image/down.png" alt="Edit" class="h-5 mb-2">
        </button>
        <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="" role="none">
            <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
            href="#"
            data-te-dropdown-item-ref
            >My profile</a>
            <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
            href="receipt"
            data-te-dropdown-item-ref
            >Payment Receipt</a>
            <button wire:click="logoutUser" class="ml-2 p-2 rounded bg-white text-black font-bold">Logout</button>
        </div>
</div>
    </div>
   </div>
        @else
        <!-- Unauthenticated links... -->
        <div class="flex">
      <div class="ml-10 flex rounded inline-block text-xs font-medium uppercase leading-normal text-black shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
        <img src="image/login.png" alt="Edit" class="h-5 mb-2">
        <div>
          <a href="admin-login" type="button" class="pl-1">
            Member Login
          </a>
        </div>
      </div>

      <div class="flex">
        <div class="ml-5 flex rounded inline-block text-xs font-medium uppercase leading-normal text-black shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
          <img src="image/login.png" alt="Edit" class="h-5 mb-2">
          <div>
            <a href="admin-login" type="button" class="pl-1">
              Admin Login
            </a>
          </div>
        </div>
      </div>
   </div>
        @endauth
      </div>
   
    </nav>
  </div>

  <!-- Mobile Navigation -->
  <div id="mySidenav" class="rlg:hidden sidenav my-20 bg-white border border-2 fixed h-full w-0 z-10 top-0 left-0 overflow-x-hidden transition-all duration-500">
    
  <a href="javascript:void(0)" class="closebtn text-red absolute right-5 mt-20 text-3xl mt-2" onclick="closeNav()">&times;</a>
    <!-- Sidebar content... -->
    <div class="pt-5 border-b border-gray-200 border-solid pb-5 mt-10 ">
    <a href="/" class="text-black block py-2 px-4 text-sm">Home</a>
    <a href="about-us" class="text-black block py-2 px-4 text-sm">About Us</a>
    <a href="rooms" class="text-black block py-2 px-4 text-sm">Rooms</a>
    <a href="gallery" class="text-black block py-2 px-4 text-sm">Gallery</a>
    <a href="/" class="text-black block py-2 px-4 text-sm">Recreational Facilities</a>
    <a href="contact-us" class="text-black block py-2 px-4 text-sm">Contact Us</a>
    <div class="mb-4 font-bold ml-1 mt-5 lg:mb-0 lg:pl-0 lg:pr-1" data-te-nav-item-ref>
            <a class="p-3 bg-white rounded text-black font-mono font-bold  text-lg" href="rooms" data-te-nav-link-ref>BOOK NOW</a>
    </div>
  </div>
  <div class="p-6 text-center text-sm">
    <span>© 2023 Copyright:</span>
    <a class="font-semibold" href="https://tw-elements.com/"
      >Heams Apartment & Suites</a
    >
  </div>
  <div class="text-xs text-center font-mono"><a href="https://paultechservices.ng/">PaulTechnologies</a></div>
  </div>

</div>

<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>


</div>