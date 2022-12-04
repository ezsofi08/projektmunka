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
margin-right:20px;
margin-bottom:20px;
}


</style>

<div class="container" style="background-color: white;" id="con">
    <h1 class="mb-3">Időpontfoglalás</h1>
    <div class="row">

    <div class="col-sm">
    <div class="input-group">

@foreach ($appointments as $app)
 
          <form method="post" action="teszt0" id="gomb">
          @csrf
          <input type="hidden" name="book" value="{{{ $app->id }}}">
          <input type="submit" class="btn btn-primary" value="{{ $app->end_at }}">
          </form>

@endforeach

<div class="col-sm">

</div>
</div>


@endsection