<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
  <body>
    <div id="app">
        <section class="px-3 py-4">
         <header class="container mx-auto ">
              <h1>
                   <img src="/images/logo3.png">
               </h1>
               <div class="flex-1">
                   <ul>
                       <li><a class="font-bold  text-lg mb-4 block"
                              href="/"
                           >Home</a></li>

                       <li><a class="font-bold text-lg mb-4 block"
                              href="/Explorer"
                           >Explorer</a></li>


                       <li><a class="font-bold text-lg mb-4 block"
                              href="#"
                           >Notifications</a></li>

                       <li><a class="font-bold text-lg mb-4 block"
                              href="#"
                           >Messages</a></li>

                       <li><a class="font-bold text-lg mb-4 block"
                              href="#"
                           >Bookmarks</a></li>

                       <li><a class="font-bold text-lg mb-4 block"
                              href="#"
                           >Lists</a></li>

                       <li><a class="font-bold text-lg mb-4 block"
                              href="#"
                           >Profile</a></li>



                       <li><a class="font-bold text-lg mb-4 block"
                              href="#"
                           >More</a></li>


                   </ul>




        <section class="px-3 py-4">

            <main class="container mx-auto">

            </main>


       </body>
</section>

</html>
