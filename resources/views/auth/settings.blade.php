@extends('layouts.app')

@section('content')
    <form action = "/asettings/create" method = "post">
        @csrf;
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Settings</div>
                    <div>
                        <label for="username" class="col-md-4 control-label" name="username">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$user_data->name}}">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="col-md-4 control-label">E-mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{$user_data->email}}">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" value="">
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 h2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection