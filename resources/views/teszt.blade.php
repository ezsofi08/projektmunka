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

#dropdown{
    width:200px;
}
#start{
    width:200px;
}
#end{
    width:200px;
}
#con{
    height: 600px;
}

#gomb{
    height:50px;
    width:100px;
    font-size:18px;
    background-color: rgb(65, 88, 192)

}


</style>

<div class="container" style="background-color: white;" id="con">
    <h1 class="mb-3">Időpontfoglalás</h1>
    <div class="row">

    <div class="col-sm" id='hello'>
    <div class="input-group">

@foreach ($appointments as $app)
 
          <form method="post" action="teszt0">
          @csrf
          <input type="hidden" name="book" value="{{{ $app->id }}}">
          <input type="submit" class="btn btn-danger" value="{{ $app->end_at }}">
          </form>

@endforeach

<div class="col-sm">

</div>
</div>


@endsection