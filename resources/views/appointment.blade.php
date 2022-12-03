@extends('layouts.app')

@section('content')
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

<div class="container" style="background-color: white" id="con">
   

    <h1 class="mb-3">Időpontfoglalás</h1>
    <div class="row">
    <div class="col-sm">
    <label class="col-md-4" for="start">Mettől:</label>

    <input type="date" id="start" name="trip-start"
       value="2022-11-26"
       min="2022-11-26" max="2023-01-31">
    </div>

    <div class="col-sm">
    <label class="col-md-4" for="start">Meddig:</label>

    <input type="date" id="end" name="trip-end"
       value="2022-11-27"
       min="2022-11-27" max="2023-01-31">
    </div>

    <div class="col-sm" id='hello'>
    <label for="start">Orvos:</label>
    
    <div class="input-group">
    <select class="custom-select" id="inputGroupSelect04">
  @foreach ($doctors as $doctor)
    <option> 
        {{$doctor["name"]}}
    </option>
  @endforeach  
  </select>
</div>
</div>
<div class="col-sm">
<button type="submit" class="btn btn-primary" id="gomb">
                                    {{ __('Keresés') }}
</button>
</div>
</div>

</div>




</div>

</div>
@endsection
