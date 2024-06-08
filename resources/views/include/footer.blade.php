<!-- Footer container -->
<a class="md:hidden  bg-[#00224D] text-white py-4 text-center fixed bottom-0 w-full" href="rooms">Book Now</a>
<footer
  class="bg-zinc-50 text-center text-surface/75 lg:text-left">

  <!-- Main container div: holds the entire content of the footer, including four sections (TW Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left">
    <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- TW Elements section -->
      <div class="">
        <h6
          class="mb-4 pt-20 text-2xl items-center font-mono  justify-center uppercase text-[#00224D] font-bold md:justify-start">
          HEALMS APARTMENT & SUITES
        </h6>
      </div>
      <!-- Products section -->
      <div>
        <h6
          class="text-lg font-bold leading-6 text-gray-900 md:justify-start">
          PRODUCTS
        </h6>
        <p class="mb-4 pt-5">
          <a href="#!">Home</a>
        </p>
        <p class="mb-4">
          <a href="#!">About Us</a>
        </p>
        <p class="mb-4">
          <a href="#!">Rooms</a>
        </p>
        <p>
          <a href="#!">Recreational Services</a>
        </p>
        <p>
          <a href="#!">Gallery</a>
        </p>
        <p>
          <a href="#!">Contact Us</a>
        </p>
      </div>
      <!-- Useful links section -->
      <!-- Contact section -->
      <div>
        <h6
          class="text-lg font-bold leading-6 text-gray-900 md:justify-start">
          CONTACT
        </h6>
        <p class="mb-4 pt-5 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
              <path
                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>
          </span>
          km 100, Benin Auchi Rd, Ewu-Esan Edo State.
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
            </svg>
          </span>
          info@example.com
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                clip-rule="evenodd" />
            </svg>
          </span>
          + 01 234 567 88
        </p>
      </div>

      <div>

        <form wire:submit.prevent="create" class="pt-7">
        <div>
            <label for="name" class="text-lg font-bold leading-6 text-gray-900">SUBSCRIBE TO NEWSLETTER</label>
            <input wire:model='email' type="email" id="email" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 pl-5 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 mt-1" placeholder="Enter Email">
            @error('email')
                <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="mt-6 inline-block w-1/2 rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                Submit
        </button>
        </form>
      </div>
    </div>
  </div>

  <!--Copyright section-->
  <div class="p-6 text-center text-white bg-[#00224D]">
    <span>© 2024 Copyright:</span>
    <a class="font-semibold" href="https://tw-elements.com/"
      >Heams Apartment & Suites</a
    >
    <div class="text-xs text-center font-mono"><a href="https://paultechservices.ng/">Built by PaulTechnologies</a></div
  </div>
</footer>