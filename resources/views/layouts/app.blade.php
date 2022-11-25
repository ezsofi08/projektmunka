

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

*{
    padding: 0;
    margin:0;
    box-sizing: border-box;
    text-decoration: none;
 
}

body {
  margin: 0;
  background-color: #eee;
}

.topnav {

  overflow: hidden;
  font-weight: 600;
  font-size: large;
  text-decoration: none;
  
 }

.topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  color: black;

}
 
.topnav a:hover {
  color: blue;
}

.topnav a.active {
  color: black;
}

.topnav a.active:hover {
  color: blue;
}

.topnav .icon {
  display: none;
}

#citrom{
  width:90vw;
 }

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

  <style>
            *{
    padding: 0;
     margin:0;
     box-sizing: border-box;
     font-family: 'Trebuchet MS';
     text-decoration: none;
 
 }
 
}
</style>
</head>
<body>
  <div class="container h-90" style="background-color: white">
    <div class="row d-flex justify-content-center align-items-center h-90">
    <div class="topnav" id="myTopnav">
    @if (Route::has('login'))
               <a href="home" class="active">Kezdőlap</a>
              <a href="#">Kapcsolatok</a>
                 @auth
                 <a href="#">Profil</a>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
                 </a> 
                 <a class="nav-link" href="{{route('logout') }}"
                      onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                         Kijelentkezés
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                         </form>
                   </a>
                 @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                  @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                        @endif
                    </div>
                @endauth

                 @endif
</div>
</div>

   


<script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } 

    else {
        x.className = "topnav";
    }

    }
</script>
              

        <main class="py-4">
            @yield('content')
        </main>
  </div>
  </div>
</body>
</html>
