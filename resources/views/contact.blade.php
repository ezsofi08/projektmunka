@extends('layouts.app')

@section('content')
<style>
#con{
    height: 600px;
}
.box{
     width: 80vw;
     height: 75vh;
     position: absolute;
     top: 53%;
     left: 50%;
     transform: translate(-50%, -50%);
 }
 .box ul{
    width: 80vw;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center; 
    position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
    
}
.box ul li{
     padding-right: 100px;
     margin-right: 20px;
     background-color:rgb(238, 240, 240) ;
     height: 250px;
}
.box ul li h1{
    padding-bottom: 10px;
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
 
}
.box ul li p{
    padding-bottom: 30px;
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
}
</style>
<div class="container p-10" style="background-color: white" id="con">
<div class="box">
                 <ul>
                        <li>
                            <h1>CÍM</h1>
                            <p>8315 Gyenesdiás <br> Jókai utca 23/5</p>
                        </li>
                        <li>
                            <h1>NYITVATARTÁS</h1>
                            <p>Hétfő – Péntek: 08:00 – 20:00 <br>
                                Szombat-Vasárnap: ZÁRVA</p>
                        </li>
                        <li>
                            <h1>ELÉRHETŐSÉGEK</h1>
                            <p>Telefonszám: +36 1 465 3100<br>
                                E-mail: denta@tech.hu</p>
                        </li>

                    </ul>
                     
                 </div>
</div>
@endsection