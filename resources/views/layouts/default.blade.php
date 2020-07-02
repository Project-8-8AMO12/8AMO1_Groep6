<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Imkers Leiden</title>

  <!-- Bootstrap core CSS -->

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">
  <link href="{{ asset('css/default.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="carousel.css" rel="stylesheet">
  <link rel="icon"
      type="image/png"
      href="{{asset('img/favicon.png')}}">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light static-top" style="background-color:#ffffff">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" style="max-width:100px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Menu::active('/') }}">
            <a class="nav-link" href="/">Home
            </a>
          </li>
          <li class="nav-item {{ Menu::active('activiteiten') }}">
            <a class="nav-link" href="/activiteiten">Activiteiten</a>
          </li>
          <li class="nav-item {{ Menu::active('agenda') }}">
            <a class="nav-link" href="/agenda">Agenda</a>
          </li>
          <li class="nav-item {{ Menu::active('cursussen') }}">
            <a class="nav-link" href="/cursussen">Cursussen</a>
          </li>
          <li class="nav-item {{ Menu::active('nieuws') }}">
            <a class="nav-link" href="/nieuws">Nieuws</a>
          </li>
          <li class="nav-item {{ Menu::active('vereniging') }}">
            <a class="nav-link" href="/vereniging">Vereniging</a>
          </li>
          <li class="nav-item {{ Menu::active('stertselaar') }}">
            <a class="nav-link" href="/stertselaar">Stertselaar</a>
          </li>
          <li class="nav-item {{ Menu::active('zwerm') }}">
            <a class="nav-link" href="/zwerm">Zwerm</a>
          </li>
          <li class="nav-item {{ Menu::active('bijenstal') }}">
            <a class="nav-link" href="/bijenstal">Bijenstal</a>
          </li>
          <li class="nav-item {{ Menu::active('galerij') }}">
            <a class="nav-link" href="/galerij">Galerij</a>
          </li>
          <li class="nav-item {{ Menu::active('shop') }}">
            <a class="nav-link" href="/shop">Shop</a>
          </li>
          <li class="nav-item {{ Menu::active('lid') }}">
            <a class="nav-link" href="/lid">lid worden</a>
          </li>
          <li class="nav-item {{ Menu::active('contact') }}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <!-- Footer -->
  <footer class="page-footer font-small indigo">
  <!-- Copyright -->
    <div class="footer-copyright text-center py-4">© 2020 Project 8AMO1 Groep 6: Dylan van Leeuwen, Max van Berge Henegouwen, Sepehr Abdoli, Svijetlana Devilee, Matthijs Houwaart
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>

  <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>
