<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">

</head>
<style>
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

</style>
@foreach ($questions as $qu)

    <h1 class="pdf_title">Panaszok felmérése</h1>
    <br>
    <br>
    <p class="pdf_content"> Látogatás oka: {{ $qu -> reason}}</p>
    <p class="pdf_content"> Panaszok: {{ $qu-> complain}}</p>
    <p class="pdf_content"> Panaszok fennállásának ideje: {{ $qu-> time}}</p>
    <p class="pdf_content"> Fogszabályzó: {{ $qu-> braces}}</p>
    <p class="pdf_content"> Gyógyszerallergia: {{ $qu-> medicine}}</p>
   </div>
@endforeach