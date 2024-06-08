<div>
   <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
<!-- Main navigation container -->
<nav
  class="relative fixed flex z-50 w-full h-20 flex-nowrap items-center  bg-[#00224D] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:flex-wrap lg:justify-start lg:py-4"
  data-te-navbar-ref>

    <div class="ml-20 flex justify-between">

      <!-- Left links -->
      <h1 class="text-xl font-bold text-white font-mono">HEALMS APARTMENT & SUITES</h1>
      <ul
        class="justify-between pl-20 list-style-none  flex flex-col pl-0 lg:mt-1 lg:flex-row"
        data-te-navbar-nav-ref>
        <!-- Home link -->
        <li
          class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1"
          data-te-nav-item-ref>
          <a
            class="active disabled:text-black/30 lg:px-2  dark:[&.active]:text-neutral-400 text-white"
            aria-current="page"
            href="dashboard"
            data-te-nav-link-ref
            >Dashboard</a
          >
        </li>
        <!-- Dropdown link -->
        <li
          class="mb-4 ml-20 lg:mb-0 lg:pl-0 lg:pr-1"
          data-te-nav-item-ref
          data-te-dropdown-ref>
        
    
 
          <!-- Dropdown -->
        <div x-data="{ open: false }" class="relative inline-block text-left">
        <button @click="open = !open" @click.away="open = false" class="">
        <div class="flex">
        <p class="text-sm font-bold text-white">Admin</p>
        <img src="image/bg.png" alt="Edit" class="h-2 mt-1.5 ml-1">
        </div>
        </button>
        <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="" role="none">
            <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
            href="session"
            data-te-dropdown-item-ref
            >Category</a>
            <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
            href="view-dues"
            data-te-dropdown-item-ref
            >Admins</a>
            <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
            href="view-payments"
            data-te-dropdown-item-ref
            >Payments</a>
        </div>
</div>
        </li>
        
      </ul>
          <!-- Disabled link -->
   <div class="flex   items-center justify-between ml-40 px-3">
   <div>
   <h1>
    @auth
    <p class="text-lg font-bold text-white">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
    @else
    @endauth</h1>
   </div>
    <!-- Avatar -->
    <div class="ml-3 flex">
    <img src="image/user1.png" alt="Edit" class="h-8">
   <div x-data="{ open: false }" class="relative inline-block text-left">
        <button @click="open = !open" @click.away="open = false" class="">
        <img src="image/bg.png" alt="Edit" class="h-2 mt-1.5 ml-1">
        </button>
        <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="" role="none">
            <a
            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-gray-700 hover:bg-gray-100 active:text-zinc-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-gray-400 dark:text-gray-200 dark:hover:bg-white/30"
            href="#"
            data-te-dropdown-item-ref
            >My profile</a>
            <button wire:click="logoutUser" class="ml-2 p-2 rounded bg-white text-black font-bold">Logout</button>
        </div>
</div>
  </div>
    </div>
  </div>
</nav>

</div>
