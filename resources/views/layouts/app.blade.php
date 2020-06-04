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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-white p-1 sm:p-3 rounded-lg">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              <img src="{{ asset('images/logo2.png') }}" width="50px" height="50px" alt="logo">
              <span class="font-bold text-3xl tracking-tight text-gray-800">Vue-Task</span>
            </div>
            <div class="block lg:hidden">
              <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white" onclick="toggle()">
                <svg class="fill-current text-black h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto" id="nav_wrapper">
              <div class="text-sm lg:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0  hover:text-teal-600 mr-12 text-lg text-gray-900 border-b-2 border-teal-600">
                  Employees
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-teal-600 mr-12 text-lg">
                  Calendar
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-teal-600 mr-12 text-lg">
                  Static
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-teal-600 mr-12 text-lg">
                  Client
                </a>
              </div>
              <div>
                <span><i class="fa fa-bell text-2xl text-gray-500 lg:mx-4 sm:my-2"></i></span>
              </div>
              <div>
                <span><i class="fa fa-envelope text-2xl text-gray-500 lg:mx-4 sm:my-2"></i></span>
              </div>
              <div>
                <img src="https://via.placeholder.com/50" class="rounded-full sm:my-4 lg:mx-2 sm:mx-0" alt="user">
              </div>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script>
    
    function toggle() {
        var  menu = document.getElementById('nav_wrapper');
        menu.classList.toggle("flex");
        menu.classList.toggle("hidden");
    }
    
</script>
</html>

