@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-10 border rounded border-dark px-xl-5 pt-xl-4 pb-xl-1 ">
                <div class="card">
                    <h5 class="card-header">Pagina'<s>                                                                                                                                                                                      </s></h5>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="col-md-auto mr-auto"></div>
                                <div class="col-lg-3">
                                    <div class="container">
                                        <div class="row">
                                            <a href="#" class="btn btn-success mb-2">Edit pagina</a>
                                            <a href="#" class="btn btn-warning">Delete pagina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="col-md-auto mr-auto"></div>
                                <div class="col-lg-3">
                                    <div class="container">
                                        <div class="row">
                                            <a href="#" class="btn btn-success mb-2">Edit pagina</a>
                                            <a href="#" class="btn btn-warning">Delete pagina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="col-md-auto mr-auto"></div>
                                <div class="col-lg-3">
                                    <div class="container">
                                        <div class="row">
                                            <a href="#" class="btn btn-success mb-2">Edit pagina</a>
                                            <a href="#" class="btn btn-warning">Delete pagina</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
