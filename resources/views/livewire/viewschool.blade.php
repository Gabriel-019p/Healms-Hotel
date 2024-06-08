<div>
<a href="schoolfaculty"><img src="image/turn-back.png" alt="Edit" class="w-8 h-8 inline-block mr-2 ml-20 mt-5"></a>
<div class="overflow-x-auto bg-B5C0D0 mt-10 pl-20 pr-20">
<!--search flex -->
<div>
<!--Search buttons-->
<div class="mb-3">
  <div class="relative mb-4 flex w-1/2 flex-wrap items-stretch">
    <input
      type="search"
      class="relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
      placeholder="Search"
      aria-label="Search"
      aria-describedby="button-addon1" />

    <!--Search button-->
    <button
      class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
      type="button"
      id="button-addon1"
      data-te-ripple-init
      data-te-ripple-color="light">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
        fill="currentColor"
        class="h-5 w-5">
        <path
          fill-rule="evenodd"
          d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
          clip-rule="evenodd" />
      </svg>
    </button>
  </div>
</div>
<!--search button ends -->

</div>
<!--search div ends -->
<!-- table content -->
        <table class="min-w-full text-left text-sm font-light mt-10 ">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">Due Type</th>
              <th scope="col" class="px-6 py-4">Email</th>
              <th scope="col" class="px-6 py-4">Status</th>
              <th scope="col" class="px-6 py-4">Action</th>
            </tr>
          </thead>
          @foreach ($police as $police) 
          <tbody>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $police->id }}</td>  
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $police->name }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ $police->school_email }}</td>
              <td class="whitespace-nowrap px-6 py-4">Active</td>
              <td class="whitespace-nowrap px-6 py-4">
              <img src="image/eye.png" alt="Delete" class="w-4 h-4 inline-block">
              <a href="{{ route('editdues', ['policeId' => $police->id]) }}"><img src="image/edit.png" alt="Edit" class="w-4 h-4 inline-block mr-2"></a>
            </td>
            </tr>
          </tbody>
          @endforeach 
        </table>
      </div>
  
</div>
