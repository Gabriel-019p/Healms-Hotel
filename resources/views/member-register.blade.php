<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @livewireStyles
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heams Apartment & Suites</title>

        <!-- Fonts -->
       
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        </head>
    <body class="">

    @livewire('navbarr')

    <h1 class="text-xl text-center mt-5 border-b border-gray-400 p-2">REGISTER AS A MEMBER</h1>

    @livewire('client-register')
    
    <div class="mt-20">
    @include('include.footer')
  </div>
    </body>
    </html>