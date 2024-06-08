<div>

<section class="relative">
  <div class="background-radial-gradient text-center opacity-50"></div>
  <div class="bg-cover bg-center bg-no-repeat h-screen" style="background-image: url('image/heams5.jpg')"></div>
      <div
        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
        <div class="flex h-full items-center justify-center">
          <div class="max-w-[800px] text-center text-white md:py-0 md:px-12">
            <h2 class="mb-12 font-bold  text-6sxl md:text-7xl">
            ROOMS
            </h2>
            <h6 class="text-xl text-center font-sans">HEAMS APARTMENT & SUITES offers various types of room accommodations, equipped with necessary facilities.</h6>
          </div>
        </div>
      </div>
  </section>
    
 
   <!-- table content -->
   <div class="border-b border-neutral-200 ml-5 mr-5 p-2 mt-10 text-white bg-[#074173] rounded">
   <h1 class=" text-4xl font-mono ml-10">
     OUR APARTMENT
   </h1>
  
    </div>
    <div class="overflow-x-auto">
   <table class="min-w-full text-left text-sm font-light ml-5 mr-10 ">      
   @foreach ($make_session as $make_session) 
    <tbody>
        <tr class="border-b dark:border-neutral-500 h-20">
            <td class="whitespace-nowrap px-6 py-4 font-sans text-2xl border border-slate-500 w-7 uppercase">{{ $make_session->name }}</td>
            <td class="whitespace-nowrap px-6 py-4 font-sans border border-slate-500 w-7  uppercase ">{{ $make_session->amenities }}</td>
            <td class="whitespace-nowrap px-6 py-4 font-medium border border-slate-500 max-w-md text-center">{{ $make_session->description }}</td>
            <td class="whitespace-nowrap border border-slate-500 font-bold text-center text-[#DD761C] text-2xl">NGN {{ $make_session->amount }}</td>
            <td class="whitespace-nowrap px-6 py-4">
                <a class="bg-[#FFA62F] p-2 font-bold" href="{{ route('paymentpage', ['make_sessionId' => $make_session->id]) }}">BOOK NOW</a>
            </td>
        </tr>
    </tbody>     
   @endforeach 
        </table>
</div>
    
</div>
