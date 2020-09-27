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
    <section class="px-8  py-4 mb-6">
        <header class="container">
            <h1 class="ml-32">
                <img src="/images/image.png">
            </h1>
        </header>
        <div class="lg:flex">

            <div class="flex-6">

            </div>
            <div class="ml-64">

                <div>

                </div>


            </div>


            <div class="lg:w-1/6 ">


                <ul>
                    <li > <a class="font-bold text-lg mb-4 block" href="/" >Home</a></li>
                    <li > <a class="font-bold text-lg mb-4 block" href="/Explore">Explore</a></li>
                    <li > <a class="font-bold text-lg mb-4 block" href="#" >Notifications</a></li>
                    <li > <a class="font-bold text-lg mb-4 block" href="#" >Messages</a></li>
                    <li > <a class="font-bold text-lg mb-4 block" href="#" >Bookmarks</a></li>
                    <li > <a class="font-bold text-lg mb-4 block" href="#" >List</a></li>
                    <li > <a class="font-bold text-lg mb-4 block" href="#" >Profile</a></li>
                    <li > <a class="font-bold text-lg mb-4 block" href="#" >More</a></li>

                </ul>

            </div>

            <div class="lg:flex-1 lg:mx-10">
                <div class="border border-blue-400 rounded-lg px-8 py-6">
                    <form action="">
                      <textarea
                          name="body"
                          class="w-full"
                          placeholder="Hello tweets ?"
                      ></textarea>

                        <hr class="my-4">

                        <footer class="flex justify-between">

                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40" class="rounded-circle mr-2 ">
                            </div>
                            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" >Tweet-a-room !!</button>
                        </footer>

                    </form>

                </div>

                <div></div>


            </div>
            <div class="lg:w-1/6">
                <h3 class="font-bold text-xl mb-4 block"> Friends</h3>
                <ul>
                    @foreach (range(1,8) as $index)
                        <li class="nb-4">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40px" class="rounded-circle mr-6 text-sm"> Lucky fire

                            </div>
                        </li>
                    @endforeach

                </ul>



            </div>



        </div>




    </section>

    <section class="px-3 py-4">

        <main class="container mx-auto">


        </main>
    </section>
</div>
</body>
</html>
