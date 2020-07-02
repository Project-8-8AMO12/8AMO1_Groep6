@extends('layouts.app')

@section('content')
    <main role="main">
        <div class="jumbotron">
            <div class="container" id="homeh1container">
                <h1 style="color: white;" class="display-3" id="h1home">De imker vereniging
                    van Leiden</h1>
                <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In iaculis nunc sed augue. Porttitor massa id neque al</p>
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

                <div class="card-body">
                    @if (\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            <p>{{\Illuminate\Support\Facades\Session::get('success')}}
                        </div>
                    @endif
                </div>
                <div class="card">
                    <div class="container">
                        <div class="row card-header">
                            <div class="col d-flex align-items-center">
                                <h5 class="">Pagina's</h5>
                            </div>
                            <div class="col-md-auto mr-auto"></div>
                            <div class="col-lg-3">
                                <a href="/createpagina" class="header btn btn-info mb-2">Create pagina</a>
                            </div>
                        </div>
                    </div>
                    @foreach($getpages as $getpage)
                        <div class="card-body mb-0 pb-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">{{$getpage->title}}</h5>
                                        <p class="card-text">{{$getpage->subtitle}}</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text">Gemaakt op:<br>{{$getpage->created_at}}</p>
                                            </div>
                                            <div class="col">
                                                <p class="card-text">Aangepast op:<br>{{$getpage->updated_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto mr-auto"></div>
                                    <div class="col-lg-3">
                                        <div class="container">
                                            <div class="row">
                                                <a href="{{url('editpagina',['id'=>$getpage->id])}}" class="btn btn-success mb-2">Edit pagina</a>
                                                <a href="{{url('deletepagina',['id'=>$getpage->id])}}" class="btn btn-warning">Delete pagina</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
<<<<<<< HEAD
            <hr>
        </div> <!-- /container -->
    </main>
=======
            <div class="col"></div>
        </div>
    </div>
</div>
>>>>>>> Issue_#1_cms_pages
@endsection

