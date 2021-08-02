@extends('layouts.app')

@section('content')
<div class="container text-center">
  <h1>I miei piatti</h1>

  <div>
    @if (session('deleted'))
      <div class="alert alert-success">
        <strong>{{session('deleted')}}</strong>
        è stato cancellato correttamente
      </div>
    @endif
  </div>

  <div>
    @foreach ($meals as $meal)
      
      <div class="col-12 row mt-5 d-flex align-items-center">
        <div class="col-4">
          <h2>{{$meal->name}}</h2>
          <img src="{{$meal->img}}" alt="">
        </div>
        <div class="col-8 text-left" >
          <p>{{$meal->description}}</p>
          <h4>
            <span class="badge badge-warning">
              Prezzo: {{$meal->price}}€
            </span>
          </h4>
          <div class="text-right">
            @if ($meal->available == 1)
              <span
              onclick="$meal->available = 0"
              class="badge badge-success">
                Disponibile
              </span>
            @else
              <span 
              onclick="$meal->available = 1"
              class="badge badge-danger">
                Non disponibile
              </span>
            @endif
          </div>
        </div>
      </div>
      <div class=" col-12 mt-5 d-flex justify-content-between">
        <a 
        class="btn btn-outline-info"
        href="{{route('admin.meals.edit',$meal)}}">
           Modifica Piatto
        </a>
        <form action="{{route('admin.meals.destroy',$meal)}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">
            CANCELLA
          </button>
        </form>
      </div>
      <hr>
      
    @endforeach
  </div>

  <div class="col-12 mt-5 d-flex justify-content-between">
    <a class="" href="{{route('admin.restaurants.index')}}">
      << Ritorna ai ristoranti
    </a>
    
  </div>
  
</div>
@endsection