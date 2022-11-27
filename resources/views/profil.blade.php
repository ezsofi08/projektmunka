@extends('layouts.app')

@section('content')
<style>
h1{
 text-align:center;
}
p{
    font-size:18px;
}
label{
    font-size:16px;
}

</style>


<div class="container" style="background-color: white">
    <h1 class="mb-4">Saját oldal</h1>
    <div class="container p-10"id="alma">
    <!--Grid row-->
    <div class="row" >
      <!--Grid column-->
      <div class="col-lg-6 col-md-8 mb-3 mb-md-0">
        <h3 class="mb-3">Személyes adatok:</h3>
        <div>
            <p>Vezetéknév: {{$user->firstname}}</p>
            <p>Keresztnév: {{$user->secondname}}</p>
            <p>Email cím: {{$user->email}}</p>
            <p>Telefonszám: {{'+36 30 123 4567'}}</p>
            <p>Tajszám: {{'123-456-789'}}</p>
            <p>Születési dátum: {{'1978-12-03'}}</p> 
        </div>
        <h3 class="mb-3">Jelszó módosítás:</h3>
        <div class="row mb-3">
                            <label for="oldpassword" class="col-md-2">Régi Jelszó: </label>

                            <div class="col-md-6">
                                <input id="oldpassword" type="password" class="" name="oldpassword">
                            </div>
   
        </div>
        <div class="row mb-3">
                            <label for="newpassword" class="col-md-2">{{ __('Új Jelszó: ') }}</label>

                            <div class="col-md-6">
                                <input id="newpassword" type="password" class="" name="newpassword">
                            </div>
   
        </div>
        <button type="submit" class="btn btn-primary mb-3">
                                    {{ __('Mentés') }}
        </button>
                        
      </div>
      
      <div class="col-lg-6 col-md-8 mb-3 mb-md-0">
      <h3 class="mb-3">Kórelőzmény:</h3>
      </div>
</div>
</div>
</div>
@endsection