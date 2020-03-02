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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/home">Recuperatorio DH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/peliculas">Peliculas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/actores">Actores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Logeo') }}</a>
      </li>
  </div>
</nav>
<br>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <br><br><br><br>

    <footer>

    <div class="footer-limiter">

      <div class="footer-right">

        <a href="https://github.com/maniantick"><i class="fa fa-github"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">Recuperatorio DH</p>

        <p>Manuel C. Rojas</p>
      </div>

    </div>

    </footer>
</body>
</html>
