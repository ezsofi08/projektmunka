
 @yield('content')

 <style>

  .kör{
     width: 100px;
 }

#con{
  width:90vw;
 }
 





 </style>
<footer class=" text-center ">
  <!-- Grid container -->
  <div class="container p-10"id="con">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-8 mb-3 mb-md-0">
      <img src="{{ URL('images/kéz.PNG')}}" alt="" class="kör">
        <p>
        <a href="/doctors" style="color:black" class="underline2">Fogászatunk számos elismert szakemberrel dolgozik együtt.<br> Orvosaink megtekintése!</a>

        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-10 mb-4 mb-md-0">
      <img src="{{ URL('images/video.PNG')}}" alt="" class="kör">
        <p>
        <a href="/video" style="color:black" class="underline2"> Problémája akadt az oldal kezelése közben? <br>Tekinte meg az oldal kezeléséről szóló oktató videónkat!</a>

        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
</footer>