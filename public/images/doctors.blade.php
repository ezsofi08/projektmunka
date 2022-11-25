@extends('layouts.app')

@section('content')

<style>
#orvos{
height: 170px;;
 }

h1{
    text-align:center;
 }

#auto{
    text-align:center;
}

</style>

<div class="container">

<h1>Orvosaink</h1>


  <div class="row text-center text-lg-start">

    <div class="col-lg-3 col-md-4 col-6" id="auto">
     <h4>Dr. Kiss Nikolett</h4>
      <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid " src="{{ URL('images/orvos.jpg')}}" id="orvos" alt="">
        <p>Főorvos</p>
      </div>
      
    </div>

    <div class="col-lg-3 col-md-4 col-6" id="auto">
     <h4>Dr. Árvai Kristóf </h4>
      <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid" src="{{ URL('images/orvos2.jpg')}}" id="orvos" alt="">
        <p>Vezető protetikus fogorvos</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6" id="auto">
        <h4>Dr. Ertl Zsófia</h4>
        <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid" src="{{ URL('images/orvos3.jpg')}}"id="orvos" alt="">
        <p>Szájszebész és implantológus szakorvos</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6" id="auto">
        <h4>Dr. Nagy Sándor</h4>
      <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid" src="{{ URL('images/orvos4.jpg')}}"id="orvos" alt="">
        <p>Parodontológus szakorvos</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6" id="auto">
        <h4>Dr. Szij Gábor</h4>
       <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid" src="{{ URL('images/orvos5.jpg')}}"id="orvos" alt="">
        <p>Fogorvos</p>    
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6" id="auto">
        <h4>Dr. Ruzsa Ágnes</h4>
      <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid" src="{{ URL('images/orvos6.jpg')}}"id="orvos" alt="">
        <p>Fogorvos</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6" id="auto">
      <h4>Dr. Ruska Péter</h4>
      <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid" src="{{ URL('images/orvos7.jpg')}}"id="orvos" alt="">
        <p>Fogorvos</p>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6" id="auto">
    <h4>Dr. Takács Ádám</h4>
      <div href="#" class="d-block mb-4 h-100">
        <img class="img-fluid" src="{{ URL('images/orvos8.jpg')}}" id="orvos"alt="">
        <p>Fogorvos</p>  
    </div>
    </div> 
  </div>

</div>

@endsection