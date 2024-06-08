<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Heams Apartment & Suites -  is a dedicated to creating a living space that blends luxury, comfort, and community. From our humble beginnings, we have grown into a renowned name in the real estate industry, known for our commitment to quality and excellence.">
        <meta name="keywords" content="Heams Apartment & Suites, Heams hotel, Heams Apartment, Heams Suites, Hotels, Luxury enterprise, hotel in Nigeria, Hotel in Edo State, Hotel in Irrua, Hotel in Uromi, Hotel in Ekpoma ">

        <title>Heams Apartment & Suites</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       
    
       
  
       

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        
    </head>
    <body class="">
    @livewire('navbarr')

    <div class="md:px-6">
  <!-- Section: Design Block -->
  <section class="relative">
  <div class="background-radial-gradient text-center opacity-50"></div>
  <div class="bg-cover bg-center lg:bg-no-repeat h-80 lg:h-screen " style="background-image: url('image/heams1.jpg')"></div>
      <div
        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
        <div class="flex h-full items-center justify-center">
          <div class="max-w-[800px] px-6 py-6 text-center text-white md:py-0 md:px-12">
            <h2 class="mb-12 mt-10 font-bold hidden lg:flex text-3xl md:text-5xl">
             EXPERIENCE WORLD-CLASS HOSPITALITY AT ITS FINES EXPERIENCE
            </h2>
            <h6 class="pt-10 text-xs text-center hidden lg:flex font-mono">This vibrant and innovative hotel offers: world-class Apartment and Suites, Lounge Bar, Restaurant, pool bar, room service, etc. Your ultimate destination for comfort, luxury and convenience</h6>
            <h1 class="mt-10 text-2xl bg-white text-[#00224D] p-3 lg:ml-40 lg:mr-40 "><a href="rooms">CHECK AVAILABILITY</a></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
    </div>
<section> 
<div class="lg:flex justify-between">
<h1 class="text-center mt-10 md:mt-40 text-6xl mb-10 md:text-7xl font-mono text-[#00224D]">Experience the Atmosphere</h1>
<img src="image/heams5.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
</div>
</section>   
<section>
<h1 class="text-center text-4xl pt-10 font-mono font-bold text-[#00224D] ">Our Apartment</h1>
<h6 class="pt-2 text-lg ml-20 mr-20 text-center font-mono text-black">HEAMS APARTMENT & SUITES offers various types of room accommodations, equipped with necessary facilities.</h6>
<div class="lg:flex mt-10 bg-[#F6F5F2]">
<img src="image/standard.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
<div class="text-center ml-10 mr-10">
<h1 class="mt-10 text-3xl font-sans text-[#00224D] ">Standard Room</h1>
<h1 class="pt-10">The well-designed layout maximizes space without compromising on comfort, providing a comfortable bed, a functional workspace, and a cozy living area all in one. Whether you're unwinding after a day of exploring the city or catching up on work, our single room apartments offer the perfect balance of relaxation and productivity.</h1>
<h1 class="text-center mt-20 text-xl bg-[#00224D] text-white w-1/2 lg:w-1/4 ml-20 text:ml-60 rounded-xl p-1 "><a href="rooms">Book Now</a></h1>
</div>
</div>

<div class="lg:flex bg-[#F6F5F2]">
<div class="text-center ml-10 mr-10">
<h1 class="mt-10 text-3xl font-sans text-[#00224D]">Executive Room</h1>
<h1 class="pt-10">Experience the height of comfort and luxury with a stay in our deluxe twin room. With complimentary high-speed Wi-Fi, flat-screen TV, and in-room entertainment options, our deluxe twin room ensures that you stay connected and entertained throughout your stay.</h1>
<h1 class="text-center mt-20 text-xl bg-[#00224D] text-white w-1/2 lg:w-1/4 ml-20 text:ml-60 mb-10 rounded-xl p-1 "><a href="rooms">Book Now</a></h1>
</div>
<img src="image/heams5.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
</div>

<div class="lg:flex bg-[#F6F5F2]">
<img src="image/2-bedroom.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
<div class="text-center ml-10 mr-10">
<h1 class="mt-5 text-3xl font-sans text-[#00224D]">One Bedroom Flat Apartment</h1>
<h1 class="pt-10">Indulge in the ultimate luxury experience as you step into our meticulously designed suites, where every detail has been thoughtfully curated to ensure your utmost comfort and satisfaction. From the moment you enter, you'll be enveloped in an ambiance of sophistication and warmth, with tasteful décor, plush furnishings, and exquisite finishes.</h1>
<h1 class="text-center mt-5 text-xl bg-[#00224D] text-white w-1/2 lg:w-1/4 ml-20 text:ml-60 rounded-xl p-1 "><a href="rooms">Book Now</a></h1>
</div>
</div>

<div class="lg:flex bg-[#F6F5F2]">
<div class="text-center ml-10 mr-10">
<h1 class="mt-10 text-3xl font-sans text-[#00224D]">Two Bedroom Apartment</h1>
<h1 class="pt-10">Indulge your senses in the lavish bathroom, complete with deluxe fixtures, a spacious walk-in shower, and luxurious bath amenities, where you can pamper yourself and rejuvenate after a day of exploring the vibrant streets of Nigeria.</h1>
<h1 class="text-center mt-20 text-xl bg-[#00224D] text-white w-1/2 lg:w-1/4 ml-20 text:ml-60 rounded-xl p-1 mb-10"><a href="rooms">Book Now</a></h1>
</div>
<img src="image/2bedroom-apartment.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
</div>
</section>
<section>
<div class="border-b-2 border-[#26577C] lg:ml-80 mr-80 p-1">
<h1 class="hidden:text-center text-4xl pt-10 font-mono font-bold text-[#00224D] mt-5 border-b-2 border-[#F97300]">Facilities</h1>
</div>
<div class="lg:flex mt-10">
<img src="image/heams8.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
<div class="text-center ml-10 mr-10">
<h1 class="text-center text-5xl mt-40 font-mono text-[#00224D]">Get Fit & Relax</h1></h1>
<h1 class="mb-10 mt-10 text-lg md:p-3 bg-[#FC6736] rounded ml-20 mr-20 md:ml-20 md:mr-40 text-black font-sans"><a href="about-us">More Details</a></h1>
</div>
</div>

<div class="lg:flex">
<img src="image/pool.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
<img src="image/res.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
</div>
</section> 
<div id="map" class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59385.08943162942!2d6.196748130489126!3d6.798045533659203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10469b566177c63d%3A0x89bfe5edaa292875!2sHeams%20Apartment%20And%20Suites!5e1!3m2!1sen!2sng!4v1716023606727!5m2!1sen!2sng"
            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> 

@include('include.footer')
    </body>
</html>