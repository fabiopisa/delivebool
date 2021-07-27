@extends('layouts.app')

@section('content')
<div class="container">

  <div class="col-12 text-center mt-5">
    <h1>I miei ordini</h1>
  </div>

  <div class="col-12">
    @foreach ($orders as $order)
      @if ($order->restaurant_id === $restaurant->id)
        <ul>
          <li>{{$order->customer_id}}</li>
        </ul>
      @endif
    @endforeach
  </div>

  <div class="col-12 d-flex justify-content-between align-items-center">
    <a class="btn btn-secondary" href="{{route('admin.home')}}">
      << I miei dati
    </a>
  
    <a class="btn btn-outline-primary mt-5" href="{{route('admin.restaurants.create')}}">
      Aggiungi ristorante
    </a> 
  </div>

  
</div>
@endsection