@extends('layouts.admin')
@section('content')
<div>
@foreach ($appointment as $app)
            <div class="card p-1 m-1" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{$app->firstname}} {{$app->secondname}} - {{date('Y-m-d H:m',strtotime($app->end_at))}}</p>
                    
                </div>
            </div>
  @endforeach
</div>
@endsection