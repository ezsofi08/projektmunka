<!DOCTYPE html>
<html lang="en">
<head>
  <!--Oldal újratöltés-->
    <meta http-equiv="refresh" content="60">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applikáció</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<style>

td{
    font-size: 45px;
}
th{
    font-size:50px;
}

</style>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Időpont</th>
      <th scope="col">Sorszám</th>
      <th scope="col">Kezelőorvos</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach ($appointments as $app)
   
    <tr>
     <td>{{date('H:i', strtotime($app -> end_at))}}</td>
     <td>{{$app -> user_id}}</td>
     <td>{{$app -> doctor_id}}</td>
    </tr>
  @endforeach
  </tbody>
</table>


