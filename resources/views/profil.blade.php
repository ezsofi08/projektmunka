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
#con{
    height: 600px;
}

#l{
  margin-bottom:90px;
}

</style>


<div class="container" style="background-color: white" id="con">
    <h1 class="mb-4" id="l">Saját oldal</h1>
    <div class="container p-10">
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
            <p>Sorszám: {{$user->id}}</p>
        </div>


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

     <td>{{ date("Y-m-d",strtotime( $document -> date))}}</td>
     <td>{{ $document -> treatment}}</td>
     <td>{{ $document -> doctor_first_name}} {{ $document -> doctor_second_name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('profil_pdf')}}">Részletes kórelőzmény letöltése</a>
{{-- Copy pasteltem a kórelőzményes táblázatot, ide beszúrtam egy próba-megjelenítést
csak azért hogy lássam működik-e. Az adatok lekérését a 98. sortól látjátok --}}
<h3 class="mb-3">Időpontok:</h3>
<table class="table">
  <thead>
  <tr>
      <th scope="col">Kezelőorvos</th>
      <th scope="col">Mikor</th>
  </tr>
  </thead>

  <tbody>
  @foreach ($appointments as $appointment)
      <tr>
          <td>{{ \App\Models\User::all()->find($appointment->doctor_id)->fullName }}</td>
          <td>{{ $appointment->end_at}}</td>
      </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
