@foreach ($documents as $document)
    <h2>Sándor Dent Rendelőintézet</h2>
    <h2>{{ $document -> doctor_name}} rendelése</h2>
    <h1>Fogászati kezelőlap</h1>
    <h3> Beteg neve: {{ $document -> user_name}}</h3>
    <h3> Kezelés: {{ $document -> treatment}}</h3>
    <h3> Leírás: {{ $document -> description}}</h3>
    <h3> Dátum: {{ $document -> date}}</h3>
    <div style="page-break-after: always">
   </div>
@endforeach