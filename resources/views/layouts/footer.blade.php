
 @yield('content')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 <script src="{{ asset('js/app.js') }}" defer></script>
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
        <a href="#" style="color:black" class="underline2" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> Problémája akadt az oldal kezelése közben? <br>Tekinte meg az oldal kezeléséről szóló oktató videónkat!</a>

        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <iframe width="460" height="375"
                         src="https://www.youtube.com/embed/ScRfdFhceQc">
                 </iframe>
     </div>
 </div>
</footer>
