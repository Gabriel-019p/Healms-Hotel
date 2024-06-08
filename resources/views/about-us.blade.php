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
    <h1 class="text-5xl text-center text-[#00224D] font-mono">About Us</h1>
    <div class="lg:flex  mt-10 ml-5 mr-5 lg:ml-40 lg:mr-40">
        <img src="image/room10.jpg" alt="Edit" class="w-full lg:w-1/2 mb-2 object-cover">
        <div class="text-center lg:ml-10 lg:mr-10">
        <h1 class="pt-10">Heams Apartments begins with a vision to redefine urban living. Founded by a group of passionate architects and entrepreneurs, our journey started with a simple yet profound idea: to create a living space that blends luxury, comfort, and community. From our humble beginnings, we have grown into a renowned name in the real estate industry, known for our commitment to quality and excellence.</h1>
    </div>
</div>
</div>

<div class="lg:flex  mt-10  bg-[#F6F5F2]">
        <img src="image/heams5.jpg" alt="Edit" class="h-80 mb-2">
        <div class="text-center ml-10 mr-10">
        <div class="mt-20 mb-10 ">
        <h1 class="text-3xl font-mono text-[#00224D]">Core Values</h1>
        <h1 class="mt-5">Integrity, Equality, Compassion, Sustainability and Diversity</h1>
        </div> 
    </div>
    <img src="image/heams8.jpg" alt="Edit" class="h-80 mb-2">
</div>


    <div class="">
    @include('include.footer')
  </div>
    </body>
    </html>