<div>

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
<div class="mt-10">
    <a 
        class="bg-red-500 p-3"
        href="dues"
        data-te-dropdown-item-ref
        >++ Create New Admin
    </a>
</div>
</div>
<!--search div ends -->
<!-- table content -->
        <table class="min-w-full text-left text-sm font-light mt-10 ">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">Administrator</th>
              <th scope="col" class="px-6 py-4">phone</th>
              <th scope="col" class="px-6 py-4">Status</th>
              <th scope="col" class="px-6 py-4">Action</th>
            </tr>
          </thead>
          @foreach ($paydues as $paydues) 
          <tbody>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $paydues->id }}</td>  
              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $paydues->first_name }} {{ $paydues->last_name }}</td>
              <td class="whitespace-nowrap px-6 py-4">{{ $paydues->phone }}</td>
              <td class="whitespace-nowrap px-6 py-4">
              <input
                class="me-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-black/25 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-white after:shadow-switch-2 after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ms-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-switch-1 checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-switch-3 focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ms-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-switch-3 checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-white/25 dark:after:bg-surface-dark dark:checked:bg-primary dark:checked:after:bg-primary"
                type="checkbox"
                role="switch"
                id="flexSwitchCheckDefault" />
              </td>
              <td class="whitespace-nowrap px-6 py-4">
              <a href="{{ route('editdues', ['payduesId' => $paydues->id]) }}"><img src="image/edit.png" alt="Edit" class="w-4 h-4 inline-block mr-2"></a>
              <a href="{{ route('update-password', ['payduesId' => $paydues->id]) }}"><img src="image/padlock.png" alt="Edit" class="w-4 h-4 inline-block mr-2"></a>
                <img src="image/delete.png" alt="Delete" class="w-4 h-4 inline-block">
            </td>
            </tr>
          </tbody>
          @endforeach 
        </table>
      </div>
  
</div>
