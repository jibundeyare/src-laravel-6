<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATM - @yield('title')</title>
    @push('css')
        <link rel="stylesheet" href="/css/app.css">
    @endpush
    @stack('css')

    @push('js')
        <script src="/js/app.js"></script>
    @endpush
    @stack('js')
</head>
<body>
    <header>
        @section('banner')
            <div class="banner">bannière par défaut</div>
        @show

        <h1>@yield('title')</h1>

        <nav>
            <ul>
                <li><a href="{{ route('main.contact') }}">Contact</a></li>
                <li><a href="{{ route('search.index') }}">Recherche</a></li>
            </ul>
        </nav>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer>
        pied de page
    </footer>
</body>
</html>