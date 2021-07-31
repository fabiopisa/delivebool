@extends('layouts.app')

@section('content')
<div class="container">

  <div class="col-12 text-center mt-5">
    <h1>I miei ordini</h1>
  </div>

  <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id ordine</th>

          <th scope="col">Nome</th>
          <th scope="col">Cognome</th>
          <th scope="col">Indirizzo</th>
          <th scope="col">piatti</th>
          <th scope="col">prezzo</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
        @if ($order->restaurant_id === $restaurant->id)
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->customer->name}}</td>
          <td>{{$order->customer->surname}}</td>
          <td>{{$order->customer->address}} | n {{$order->customer->house_num}} | intern. {{$order->customer->intern}}</td>
          <td>
            <ul>
              @foreach ($order->meals as $meal)
              <li>
                {{$meal->name}}
              </li>
                  
              @endforeach
            </ul>
          </td>

          <td>{{$order->price}}</td>
        </tr>
      @endif
    @endforeach

      </tbody>
    </table>
  </div>

  <div class="col-12 mt-5 d-flex justify-content-between">
    <a class="" href="{{route('admin.restaurants.index')}}">
      << Ritorna ai ristoranti
    </a>
    
  </div>

  
</div>
@endsection