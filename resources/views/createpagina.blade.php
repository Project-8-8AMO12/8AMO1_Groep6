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
                <form action="createpagina" method="POST">
                    <div class="form-row">
                        <div class="col form-group">
                            <label for="title">Title</label>
                            <input class="form-control" id="title" name="title" type="text" value="{{old('title')}}">
                        </div>
                        <div class="col form-group">
                            <label for="subtitle">Subtitle</label>
                            <input class="form-control"  id="subtitle" name="subtitle" type="text" value="{{old('subtitle')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Inhoud</label>
                        <textarea class="form-control" id="content" name="content" rows="20">{{old('content')}}</textarea>
                        <button type="submit" class="btn btn-primary mt-3">Opslaan</button>
                    </div>
                    @csrf
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
