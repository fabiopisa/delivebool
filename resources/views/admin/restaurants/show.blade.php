@extends('layouts.app')

@section('content')
<div class="container text-center">
  <h1>I miei piatti</h1>

  <div class="d-flex flex-wrap">
    @foreach ($meals as $meal)
      <div class="col-6 mt-5">
        <h3>{{$meals->name}}</h3>
        <img src="{{$meals->img}}" alt="">
        <p>{{$meals->description}}</p>
        <span class="badge badge-info">Prezzo: {{$meals->price}}€</span>
        @if ($meals->available == 1)
          <span class="badge badge-success">Disponibile</span>
        @else
          <span class="badge badge-danger">Non disponibile</span>
        @endif
      </div>
    @endforeach
  </div>
  
</div>
@endsection