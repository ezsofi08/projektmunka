@extends('layouts.admin')
@section('content')
<form action="valami0" method="post">
        @csrf
        <button type="submit">Nem jelent meg</button>
</form>
    
    <p>{{$appointment->end_at}}</p> 
    <p>{{$patient->firstname}}</p> 
    <p>{{$patient->secondname}}</p>
    <p>{{$patient->TAJ}}</p>
    <p>{{$patient->birthday}}</p>
<form action="savedoc" method="post">
        @csrf
        <p>Kezelés:</p>
        <input type="text" name="treatment">
        <p>Leírás:</p>
        <input type="text" name="description">
        <button type="submit">Mentés</button>
</form>



@endsection