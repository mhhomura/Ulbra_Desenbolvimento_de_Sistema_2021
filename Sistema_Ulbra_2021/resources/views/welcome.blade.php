<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Service Center</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap4.5.3.min.css') }}" media="screen">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased " style="background-color: withe;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #a9f9aa;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Service Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))

                        @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        </li>

                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                        </li>


                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        </li>

                        @endif
                        @endauth

                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div style="text-align: center; padding: 25px; ">
        <h1>Service Center</h1>
    </div>
    <div style="text-align: center">
        <img src="{{ asset('img/gif2.gif') }}" style="width: 50%; height: 40%;" />
    </div>
</body>


</html>