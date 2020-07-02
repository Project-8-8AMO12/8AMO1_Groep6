@extends('layouts.app')

@section('content')
    <div class="text-center border mx-auto">
        <h1>Naam: {{$contact_data->naam}}</h1>
        <h1>Email: {{$contact_data->email}}</h1>
        <h1>Bericht: {{$contact_data->bericht}}</h1>
    </div>
@endsection