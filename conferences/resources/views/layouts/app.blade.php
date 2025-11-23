<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Conference Management') }} - @yield('title')</title>

    @vite(['resources/css/app.css'])
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Conference Management') }}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth

                        <li class="nav-item">
                            <span class="navbar-text text-white me-3">
                                {{ __('messages.welcome') }}, {{ Auth::user()->name }}
                            </span>
                        </li>
                        <li class="nav-item">

                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-light">
                                    {{ __('messages.logout') }}
                                </button>
                            </form>
                        </li>
                    @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                {{ __('messages.login') }}
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    
    <main class="py-4">
        <div class="container">
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </main>


    <footer class="bg-light text-center text-muted py-3 mt-5">
        <div class="container">
            <p class="mb-0">
                &copy; {{ date('Y') }} {{ config('app.name', 'Conference Management') }}.
                {{ __('messages.all_rights_reserved') }}
            </p>
        </div>
    </footer>

    @vite(['resources/js/app.js'])
</body>
</html>
