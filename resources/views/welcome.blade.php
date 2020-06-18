<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Imkers Leiden</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<style>

header {
  background-color:#EB9605;
  color:white;
}

</style>
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
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/activiteiten">Activiteiten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/agenda">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cursussen">Cursussen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/nieuws">Nieuws</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/vereniging">Vereniging</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/stertselaar">Stertselaar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/zwerm">Zwerm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/galerij">Galerij</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <header>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-left">
        <p class="lead mt-3">Home | Imkers Leiden</p> <!--MAYBE ADD BREADCRUMB-->
      </div>
    </div>
  </div>
</header>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('jquery/jquery.slim.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
