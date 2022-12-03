<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">

</head>
<style>




.pdf_header{
   align: center;
   text-align:center;
   font-size: 20;

}

.pdf_title{
    
    align: center;
    text-align: center;
    font-weight: bold;
    font-size: 30;
    /*font-family: 'Exo', sans-serif;*/
}

.pdf_content{
    margin: 20px;
    font-size: 18;
}

.pdf_footer{
    position: absolute;
    width: 50%;
    bottom: 20px;
}

</style>
@foreach ($documents as $document)
    <hr>
    <p class="pdf_header">Sándor Dent Fogászat</p>
    <p class="pdf_header">{{ $document -> doctor_first_name}} {{ $document -> doctor_second_name}} rendelése</p>
    <hr>
    <br>
    <h1 class="pdf_title">Fogászati törzslap</h1>
    <br>
    <br>
    <p class="pdf_content"> Beteg vezetékneve: {{ $document -> user_first_name}}</p>
    <p class="pdf_content"> Beteg kezetékneve: {{ $document -> user_second_name}}</p>
    <p class="pdf_content"> TAJ: {{ $document -> TAJ}}</p>
    <p class="pdf_content"> Kezelés: {{ $document -> treatment}}</p>
    <p class="pdf_content"> Leírás: {{ $document -> description}}</p>
    <p class="pdf_content pdf_footer"> Dátum: {{ $document -> date}}</p>
    <div style="page-break-after: always">
   </div>
@endforeach