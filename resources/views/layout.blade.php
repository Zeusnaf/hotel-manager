<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hotel Manager</title>
    <link href="{{ asset('public/css/tailwind.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/fonts/fontawesome/css/all.css') }}">
    <style>
        body    {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-blue-dark p-6">
    <div class="navbar-brand">
        <a class="text-blue-lightest text-lg font-bold no-underline" href="/">
            Hotel Manager
        </a>
    </div>
    @if(auth()->check())
        <div class="navbar-start">
            <ul class="list-reset flex">
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="{{ url('/') }}">Dashboard</a>
                </li>
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="{{ action('CustomersController@index') }}">Clients</a>
                </li>
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="{{ action('RoomsController@index') }}">Rooms</a>
                </li>
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="{{ action('ProductsController@index') }}">Products</a>
                </li>
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="{{ action('BookingsController@index') }}">Bookings</a>
                </li>
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="{{ action('ConsumptionController@index') }}">Consumption</a>
                </li>
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="{{ action('ReportsController@index') }}">Reports</a>
                </li>
                <li class="mr-3">
                    <a class="text-blue-lighter text-sm font-bold no-underline hover:text-blue-lightest" href="#" onclick="event.preventDefault();document.getElementById('logoutForm').submit()">Logout
                        <form id="logoutForm" action="{{ route('logout') }}" method="post">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    @else
        <div class="navbar-start">
            <ul class="list-reset flex">
                <li class="mr-3">
                    <a class="text-blue-lighter no-underline hover:text-blue-lightest" href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    @endif
</nav>
<div class="px-24 min-h-screen pt-10 bg-grey-lighter">
    <div class="">
        @yield('content')
    </div>
</div>
<script src="/js/all.js"></script>
</body>
</html>
