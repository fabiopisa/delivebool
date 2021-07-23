@extends('layouts.app')

@section('content')
<div class="container text-center">
  <h1>I miei piatti</h1>

  <div>
    @foreach ($meals as $meal)
      @if ($meal->restaurant_id === $restaurant->id)
        <div class="col-12 row mt-5 d-flex align-items-center">
          <div class="col-4">
            <h2>{{$meal->name}}</h2>
            <img src="{{$meal->img}}" alt="">
          </div>
          <div class="col-8 text-left" >
            <p>{{$meal->description}}</p>
            <h4>
              <span class="badge badge-info">
                Prezzo: {{$meal->price}}€
              </span>
            </h4>
            <div class="text-right">
              @if ($meal->available == 1)
                <span class="badge badge-success">Disponibile</span>
              @else
                <span class="badge badge-danger">Non disponibile</span>
              @endif
            </div>
          </div>
        </div>
        <hr>
      @endif
    @endforeach
  </div>

  <a class="mt-5 float-left" href="{{route('admin.restaurants.index')}}">
    << Ritorna ai ristoranti
  </a>
  
</div>
@endsection