@extends('layouts.default')

@section('content')
    <main role="main">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://placeimg.com/1080/500/animals" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placeimg.com/1080/500/arch" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://placeimg.com/1080/500/nature" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4" id="homecontainers">
                    <h2>Officieel NBV vereniging</h2>
                    <p>Er is in ons land een aantal imkersverenigingen, waarvan de Nederlandse Bijenhouders Vereniging (NBV) met bijna 6000 leden, de grootste is. De Imkersvereniging Leiden en omstreken is aangesloten bij de NBV.
                        Regelmatig organiseert onze vereniging imkersavonden. Op deze bijeenkomsten worden lezingen gehouden en films vertoond. Ook zijn deze avonden het moment waarop imkers elkaar ontmoeten en ervaringen uitwisselen. Soms worden ook excursies georganiseerd. De imkersavonden vinden in principe altijd plaats op de laatste vrijdag van de maand. Ze worden gehouden in de kantine van de Tuinvereniging Cronesteijn aan het Boerenpad 1 te Leiden. </p>
                    <p><a class="btn btn-warning" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" id="homecontainers">
                    <h2>Onze vele bij-zaken</h2>
                    <p>Als vereniging zijn we bezig bijtjes en organiseren veel leuke activiteiten, promoten wij onze hobby en delen we graag al onze kennis met mede-imker enthousiastelingen.</p>
                    <p><a class="btn btn-warning" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4" id="homecontainers">
                    <h2>Onze bijenstallen</h2>
                    <p></p>
                    <p><a class="btn btn-warning" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>
            <hr>
        </div> <!-- /container -->
    </main>
@endsection

