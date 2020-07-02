@extends('layouts.default')
@section('content')

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

<div class="row mt-3">
  <div class="col-sm-9">
    <h4>  Welkom op de website van Imkersvereniging Leiden!</h4>
  </div>
  <div class="col-sm-3"></div>
</div>

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

    <div class="row mt-2 mb-2">
      <div class="col-sm-3"><img src="{{asset('img/honingraat.jpg')}}" class="img-fluid rounded float-right"></div>
      <div class="col-sm-9">
        <h6>Wat wij doen:</h6>
        <p>
          - <b>Bijenhouden</b>, zo hebben wij een aantal bijenstallen. Deze zijn te vinden in o.a. het Heempark te Leiden, de kinderboerderij in de Merenwijk, Koninginneweg te Noordwijkerhout en tot slot nog een bijenstal in het Polderpark Cronesteijn.<br>
          - <b>Bijeenkomsten organiseren</b>, bijvoorbeeld de jaarlijkse bijenmarkt, of lezingen, films, diavertoningen, en zelfs cursussen bijenteelt!
        </p>
      </div>
    </div>

    <hr>

    <div class="row mt-2 mb-2">
      <div class="col-sm-9">
        <p>
          <b>Bijenhouden als hobby</b><br>
          De tijd van de romantische bijenteelt in strokorven is voorbij. Tegenwoordig worden bijen hoofdzakelijk gehouden in meerdelige houten of kunstof kasten. Het voordeel van kasten is dat de imker zijn volken gemakkelijker kan controleren. De raampjes kunnen er worden uitgehaald om de honing te oogsten, en om ziekten en plagen van de bijen te bestrijden. Het is in Nederland niet mogelijk van de bijenteelt te leven, maar als de imker het goed doet, kan het imkeren een aardige hoeveelheid honing opleveren, en hoeft de hobby weinig geld te kosten.
        </p>
      </div>
      <div class="col-sm-3"><img src="{{asset('img/imker2.jpg')}}" class="img-fluid rounded"></div>
    </div>

    @endsection
