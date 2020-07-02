@php
    namespace App\Http\Controllers;

use App\CreateAndUpdate;
@endphp
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
            <div class="col-lg-10 border rounded border-dark px-xl-5 pt-xl-4 pb-xl-4 ">
                <div class="card">
                    <h5 class="card-header">Pagina</h5>
                    @foreach($getpages as $getpage)
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">{{$getpage->title}}</h5>
                                    <p class="card-text">{{$getpage->subtitle}}</p>
                                </div>
                                <div class="col-md-auto mr-auto"></div>
                                <div class="col-lg-3">
                                    <div class="container">
                                        <div class="row">
                                            <a href="{{url('editpagina',['id'=>$getpage->id])}}" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">Edit pagina {{$getpage->id}}</a>
                                            <a href="{{url('deletepagina',['id'=>$getpage->id])}}" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Delete pagina</a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
