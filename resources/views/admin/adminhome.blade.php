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

<div class="container_2">
 <div class="list-group" id="but">
  <a href="/admin/new_appointment" class="list-group-item list-group-item-action">Új időpont feltöltése</a>
  <a href="/admin/valami" class="list-group-item list-group-item-action">Következő időpontom</a>
  <a href="#" class="list-group-item list-group-item-action">Kórelőzmény letöltése</a>

</div>
</div>  

@endsection