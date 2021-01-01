<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>eAset - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('easet/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="{{ route('easet') }}">eAset</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    @can('isBoleh')
                        <li class="nav-item"><a class="nav-link active" href="{{ route('easet.admin') }}">eAset Manager</a></li>
                    @endcan
                    @can('isPns')
                    <li class="nav-item"><a class="nav-link active" href="{{ route('easet') }}">List Aset Dipinjam</a></li>
                    @endcan
                </ul>
            </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        @yield('content')
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="{{ route('easet') }} ">eAset</a><a href="{{ route('home') }}">eSPPD</a><a href="/e-bansos">eBansos</a></div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('easet/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="{{ asset('easet/theme.js') }}"></script>
</body>

</html>
