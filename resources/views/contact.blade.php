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
    <link rel="icon"
          type="image/png"
          href="{{asset('img/favicon.png')}}">
    <style>

        header,footer,button {
            background-color:#FFFF00;
            color:white;
        }

        .row.mt-2 {
            width: 100%!important;
        }

        .formbutton {
            color: white;
            background-color: #EB9605;
            border-color: #faa310;
        }

        .error{
            color: red;
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
                    <a class="nav-link" href="/bijenstal">Bijenstal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galerij">Galerij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">Shop</a>
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

<div class="row mt-2">
    <div class="col-sm-1"></div>
    <div class="col-sm-7">
        <form action="contact" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Naam</label>
                <input type="text" class="form-control @error('naam') is-invalid @enderror" name="naam" value="{{old('naam')}}" required>
                @if ($errors->has('naam'))
                    <p class="error">{{$errors->first('naam')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required>
                @if ($errors->has('email'))
                    <p class="error">{{$errors->first('email')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Bericht</label>
                <textarea class="form-control @error('email') is-invalid @enderror" rows="3" name="bericht" value="{{old('bericht')}}" required></textarea>
                @if ($errors->has('bericht'))
                    <p class="error">{{$errors->first('bericht')}}</p>
                @endif
            </div>
            <div>
                <button type="submit" class="btn formbutton">Verstuur Bericht</button>
            </div>
            @csrf
        </form>
    </div>
    <div class="col-sm-3">
        <h2>Het bestuur van de vereniging bestaat uit:</h2>
        <ul>
            <h6>Voorzitter</h6>
            <li>Steven Kluft</li>
            <li>06-37090821</li>
            <br>
            <h6>Leden:</h6>

            <li>Hans Kluivers</li>
            <li>06-24693636</li>
            <br>
            <li>Ottoline Dinger</li>
            <li>06-11325112</li>
            <br>
            <li>Peter Henneman</li>
            <li>06-53735714</li>
            <br>
            <li>Roland Koster</li>
            <li>06-12696855</li>
        </ul>
    </div>
</div>

<hr>

<div class="row mt-2">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
        <h2>Winkel / verenigingsgebouw (voorheen depot)</h2>
        <p>Boerenpad 3 <br>2322 LA Leiden</p>
    </div>
    <div class="col-sm-5">
        <h2>Postadres</h2>
        <p>Imkersvereniging Leiden en omstreken<br>Jan van Goyenkade 42<br>2311 BC Leiden</p></div>
    <div class="col-sm-1"></div>
</div>

<!-- Footer -->
<footer class="page-footer font-small indigo">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-4">© 2020 Project 8AMO1 Groep 6: Dylan van Leeuwen, Max van Berge Henegouwen, Sepehr Abdoli, Svijetlana Devilee, Matthijs Houwaart
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('jquery/jquery.slim.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
