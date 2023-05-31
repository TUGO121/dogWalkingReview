<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Dog walking reviview!!') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            
            .categories {
                text-align: center;
            }
            
            .reviews {
                display: flex;
            }
            
            .img-container {
                flex: 0 0 auto;
            }
            
            .review-list {
                text-align:left;
                display: flex;
                flex-wrap: wrap;
                gap:100px,100px;
            }
            
            .review {
                margin-top:50px;
                flex: 0 0 100%;
            }
            .rating {
              unicode-bidi: bidi-override;
              direction: rtl;
              text-align: left;
            }
            .rating > input {
              display: none;
            }
            .rating > label {
              display: inline-block;
              position: relative;
              width: 1.1em;
              height: 1.1em;
              cursor: pointer;
              color: #CBD5E0;
            }
            .rating > label:before {
              content: "\2605";
              position: absolute;
              color: #FDBA74;
              opacity: 0;
              transition: opacity 0.2s;
            }
            .rating > input:checked ~ label:before {
              opacity: 1;
            }
            .rating > .edit-rating:hover:before,
            .rating > .edit-rating:hover ~ .edit-rating:before {
              opacity: 1;
            }
            
            body {
                background-color: ;
            }
            
            
         </style>
  
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
