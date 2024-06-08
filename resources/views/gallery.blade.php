<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heams Apartment & Suites</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
       
  
  
        <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        </style>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        
    </head>
    <body class="">
    @livewire('navbarr')
<div class="mt-10">
    <h1 class="text-5xl text-center text-[#00224D] font-mono ">Gallery</h1>
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
  <div class="-m-1 flex flex-wrap md:-m-2">
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/heams1.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/heams5.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/heams8.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/parlour.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/pool.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/polour3.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/res.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/room10.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
    <div class="flex w-1/3 flex-wrap">
      <div class="w-full p-1 md:p-2">
        <img
          alt="gallery"
          class="block h-full w-full rounded-lg object-cover object-center"
          src="image/room7.jpg" alt="Edit" class="h-80 mb-2">
      </div>
    </div>
  </div>
</div>

</div>
<div id="map" class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat mt-10">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59385.08943162942!2d6.196748130489126!3d6.798045533659203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10469b566177c63d%3A0x89bfe5edaa292875!2sHeams%20Apartment%20And%20Suites!5e1!3m2!1sen!2sng!4v1716023606727!5m2!1sen!2sng"
            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> 
@include('include.footer')
    </body>
    </html>