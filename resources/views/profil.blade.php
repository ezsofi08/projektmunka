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
            <p>Telefonszám: {{$user->phone_number}}</p>
            <p>Tajszám: {{$user->TAJ}}</p>
            <p>Születési dátum: {{$user->birthday}}</p> 
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

      <table class="table">
  <thead>
    <tr>

      <th scope="col">Dátum</th>
      <th scope="col">Kezelés</th>
      <th scope="col">Kezelőorvos</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach ($documents as $document)
    <tr>
      
      <td>{{ $document -> date}}</td>
     <td>{{ $document -> treatment}}</td>
     <td>{{ $document -> doctor_name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('profil_pdf')}}">Részletes kórelőzmény letöltése</a>
</div>
</div>
</div>
</div>
@endsection