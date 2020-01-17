<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ATM - @yield('title')</title>

    @push('css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endpush
    @stack('css')

    @push('js')
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endpush
    @stack('js')
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    @section('banner')
                        <div class="banner">bannière par défaut</div>
                    @show
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>@yield('title')</h1>

                    <nav>
                        <ul>
                            <li><a href="{{ route('main.contact') }}">Contact</a></li>
                            <li><a href="{{ route('search.index') }}">Recherche</a></li>
                            <li><a href="{{ route('foo.index') }}">Liste des foos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="container-fluid">
        pied de page
    </footer>
</body>
</html>