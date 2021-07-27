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
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
        <tr>
          <th scope="row">{{$order->id}}</th>
          <td>{{$order->name}}</td>
          <td>{{$order->surname}}</td>
          <td>{{$order->address}}</td>
          <td>
            <ul>
              @foreach ($order->meals as $meal)
                <li>
                  <h1>{{$meal}}</h1>
                </li>
              @endforeach
            </ul>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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