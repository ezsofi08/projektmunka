@extends('layouts.admin')
@section('content')
<style>
#con{
    align-items: center;
    text-align:center;
}
#new{
    border-right: 2px solid green;
}

#but{
    align-items: center;
    text-align:center;
    width:60%;

}


</style>

<div class="container_2 justify-content-center d-flex list-inline text-center">
 <div class="list-group" id="but">

  <a href="/admin/new_appointment" class="list-group-item-info list-group-item list-group-item-action">Új időpont feltöltése</a>
  <a href="/admin/valami" class="list-group-item-info list-group-item list-group-item-action">Következő időpontom</a>
  <a   class="list-group-item-info list-group-item list-group-item-action" href="{{route('logout') }}"
                      onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                         Kijelentkezés
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                 </form>
 </a>
</div>
</div>  

@endsection