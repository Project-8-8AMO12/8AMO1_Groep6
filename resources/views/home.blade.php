@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
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
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection
