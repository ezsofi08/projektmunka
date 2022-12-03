@extends('layouts.admin')
@section('content')
<style>

#x{
        margin-bottom:20px;
}
#doc{
        margin-bottom:20px;   
}


</style>
<div class="container p-10">
<div class="row" >
<div class="col-lg-6 col-md-8 mb-3 mb-md-0">
    <p> IDŐPONT: {{date('H:i', strtotime($appointment->end_at))}}</p> 
    <p>VEZETÉKNÉV: {{$patient->firstname}}</p> 
    <p>KERESZTNÉV: {{$patient->secondname}}</p>
    <p>TAJ: {{$patient->TAJ}}</p>
    <p id="x">SZÜLETÉSI DÁTUM: {{$patient->birthday}}</p>
<form action="getdoc" method="post">
        @csrf
        <button class="btn btn-secondary" type="submit" id="doc" >Kórelőzmény</button>
</form>
    <form action="valami0" method="post">
        @csrf
        <button class="btn btn-secondary" type="submit" >Nem jelent meg</button>
</form>
</div>



<div class="col-lg-6 col-md-8 mb-3 mb-md-0">
<form action="savedoc" method="post" id="form">
       
        @csrf
        <p>Kezelés:</p>
        <input type="text" class="form-control" name="treatment">
        <p>Leírás:</p>
        <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
        <!--<input class="form-control" type="text" rows="5" name="description" id="desc">--> <br>
        <button class= "btn btn-primary" type="submit" id="save">Mentés</button>
</form>
</div>



</div>
</div>

@endsection