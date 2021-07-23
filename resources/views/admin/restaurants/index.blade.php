@extends('layouts.app')

@section('content')
<div class="container">
  {{-- <div class="col-12 text-center  mt-5">
    <h1>I miei dati</h1>
  </div> --}}
  {{-- <div class="col-12 text-center">
    <div class="card col-6 m-auto">
      <div class="card-body">
        <h6 class="card-title">Nome</h6>
        <h5 class="card-title">{{ Auth::user()->name}}</h5>
        <h6 class="card-title">Cognome</h6>
        <h5 class="card-title">{{ Auth::user()->surname}}</h5>
        <h6 class="card-title">Email</h6>
        <h5 class="card-title">{{ Auth::user()->email}}</h5>
        <h6 class="card-title">P.IVA</h6>
        <h5 class="card-title">{{ Auth::user()->pIva}}</h5>
      </div>
    </div>
  </div> --}}


  <div class="col-12 text-center mt-5">
    <h1>I miei ristoranti</h1>
  </div>


  @foreach ($restaurants as $restaurant)
    @if (Auth::user()->id === $restaurant->user_id)
      <div class="card row mb-5">
        <div class="d-flex justify-content-between align-items-center">
          <ul class=" list-unstyled m-4">
            <li class="m-4">{{$restaurant->name}}</li>
            <li class="m-4">{{$restaurant->address}}</li>
          </ul>
  
          <div class="m-5">
            <a class="btn btn-success" href="{{route('admin.restaurants.show',$restaurant)}}">
              Menù
            </a>
          </div>
        </div>
      </div>
    @endif
    
  @endforeach

  <a href="{{route('admin.home')}}">
    << I miei dati
  </a>

  
</div>
@endsection