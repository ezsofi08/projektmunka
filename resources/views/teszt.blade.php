@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>

h1{
    text-align:center
}

#con{
    height: 600px;
    align-items: center;
    justify-content: center;
}

#gomb{
margin-right:45px;
margin-bottom:40px;
height: 55px;
width: 210px;
align-items: center;
}

#title{
  margin-bottom: 40px;
}

</style>

<div class="container" style="background-color: white;" id="con">
<div id="title">
    <h1 class="mb-3" >Időpontfoglalás</h1>
    </div>
    <div class="row">

    <div class="col-sm">
    <div class="input-group">

@foreach ($appointments as $app)
 
          <!--<form method="post" action="teszt0" id="gomb">
          @csrf
          <input type="hidden" name="book" value="{{{ $app->id }}}">-->
          <div id="gomb">
          <input id="gomb" type="submit" class="btn btn-primary" value=" {{date('Y-m-d H:i',strtotime($app->end_at))}}" lass="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
          </div>



          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kérdőív</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="question" id="gomb">
          <div class="form-group">
        
          <label for="recipient-name" class="col-form-label">Milyen okból látogat el a fogorvoshoz? (pl: kontroll, panaszom van..)</label>
          @csrf 
          <input type="text" class="form-control" name="reason">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Mik a panaszai? (Amennyiben van)</label>
            <input type="text" class="form-control" id="recipient-name" name="complain">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Mióta állnak fent a panaszai? (Amennyiben van?)</label>
            <input type="text" class="form-control" id="recipient-name" name="time">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Van e fogszabályzója?</label>
            <input type="text" class="form-control" id="recipient-name" name="braces">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Van e valamilyen gyógyszer allergiája?</label>
            <input type="text" class="form-control" id="recipient-name" name="medicine">
          </div>
       
      </div>
      <div class="modal-footer">
          @csrf
          <input type="hidden" name="question" value="{{{ $app->id }}}">
          <input type="submit" class="btn btn-primary" value="Mentés" lass="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
          </form>
      </div>
    </div>
  </div>
</div>

@endforeach

<div class="col-sm">

</div>
</div>


@endsection
