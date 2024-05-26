<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="shortcut icon" href="{{asset('img/logo.jpg')}}" type="image/x-icon">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

        {{-- Flowbite --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script> {{-- data --}}


        {{-- jquery --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

        {{-- efeito aparecer --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        .preload {
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease-in-out;
        }

        .preload * {
            visibility: hidden;
        }

        .preload::before {
            content: "";
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            border: 6px solid #ccc;
            border-top-color: #333;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            z-index: 9999;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

    </style>
    </head>
    <body class="font-sans antialiased preload bg-gray-100 dark:bg-gray-900 min-h-screen">

        <div class=" bg-gray-100 dark:bg-gray-900 min-h-screen">
            <main class="min-h-screen">
                @yield('content')
            </main>
        </div>
    </body>

    <script>
        window.addEventListener('load', function() {
            document.body.classList.remove('preload');
        });
    </script>
<script src="{{asset('js/app.js')}}"></script>
</html>
