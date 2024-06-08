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
    
@livewire('contact')
<div id="map" class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59385.08943162942!2d6.196748130489126!3d6.798045533659203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10469b566177c63d%3A0x89bfe5edaa292875!2sHeams%20Apartment%20And%20Suites!5e1!3m2!1sen!2sng!4v1716023606727!5m2!1sen!2sng"
            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> 

@include('include.footer')
    </body>
    </html>