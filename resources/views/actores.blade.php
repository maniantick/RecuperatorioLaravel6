
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Actores de Pelicula</title>
  </head>
  <body>
          <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Recuperatorio DH</a>
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
<div style="text-align:right;">
  <a class="btn btn-primary" href="/crearactor" role="button">Agregar Actor</a>
</div>
<br>
    <div class="listado">
    @foreach ($actores as $key =>$actor)
      <div style="text-align:center;" class="list-group">
    <a href="#" class="list-group-item list-group-item-action align-items-start">
      <div class="d-flex justify-content-center"> {{$actor->first_name . " " .$actor->last_name}}
      </div>

      <small class="text-muted">Rating:{{$actor->rating}}</small>
      <br>
    </a>

    </div>
    @endforeach
    <br>
    <div class="d-flex justify-content-center">
      {{ $actores->links() }}
    </div>

    <br>

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
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>
