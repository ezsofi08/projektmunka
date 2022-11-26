@extends('layouts.app')

@section('content')
<style>

 
 
 .middle_box{
     width: 80vw;
     height: 50vh;
     /*position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);*/
     display: flex;
 }
 
 h1{
     text-align: left;
     padding:20px 0px 20px;
     font-weight: 600;
     font-size: 35px;
 }
 
 span{
     color: rgb(65, 88, 192)
 }
 
 p{
     font-weight: 300;
     font-size: 18px;
     padding:0px 0px 10px;
 }
 
 .foglalas_gomb{
     text-align: center;
     height: 50px;
     display: flex;
     justify-content: center;
     align-items: center;
     font-size: 30px;
     text-decoration: none;
     color:black;
 }
 
 .fogorvos_kep{
     height: 350px;
     display: block;
     padding-right: 25px;
 }
 #banan{
  width:90vw;
  background-color:"red"
 }


 @media (max-width: 920px) {
        .img-fluid {
          display: none;
        }}
 
</style>


<div>
<div class="container" style="background-color: white">
    <div class="middle_box">
        <div class="bemutatas">
             <h1>Denta<span>Tech</span></h1>
                 <p> Üdvözöljük a DentaTech oldalán! A DentaTech célja, hogy megkönnyítse a betegek számára az orvosválasztást
                    és az időpont-egyeztetést. Nem kell többé barátokat, rokonokat kérdezgetni, telefonálgatni, várakozni,
                    amíg valaki felveszi a telefont. A legalkalmasabb időben – otthonról, akár hétvégén vagy éjszaka is – 
                    kényelmesen tudod a legmegfelelőbb időpontot kiválasztani.
                </p>

                <a href="appointment" class='foglalas_gomb'>IDŐPONTFOGLALÁS</a>

        </div>
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/dentist-checking-kids-dental-problem-2681149-2233476.png"
                 class="img-fluid" alt="Sample image">
                 </div>
    @include('layouts.footer')

</div>
@endsection



