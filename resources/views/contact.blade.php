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
                <button type="submit" class="btn formbutton btn-primary">Verstuur Bericht</button>
            </div>
            @csrf
        </form>
    </div>
    <div class="col-sm-3">
        <h2>Het bestuur</h2>
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

@endsection
