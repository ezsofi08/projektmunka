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
    <label for="start" class="m-2">Orvos:</label>

    <div class="input-group">
    <select class="custom-select m-1" id="inputGroupSelect04">
  @foreach ($doctors as $doctor)
    <option data-name="{{$doctor["name"]}}">
        {{$doctor["name"]}}
    </option>
  @endforeach
  </select>

<div class="col-sm">
<button onclick="getSelectedDoctor();" type="submit" class="btn btn-primary m-2" id="gomb">
{{ __('Keresés') }}
</button>
</div>
</div>

<script>
    let getSelectedDoctor = () => {
        let element = document.getElementById("inputGroupSelect04");
        let name = element.options[element.selectedIndex].getAttribute("data-name");
        alert(name);
    }
</script>

@endsection
