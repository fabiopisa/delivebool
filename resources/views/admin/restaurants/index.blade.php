@extends('layouts.app')

@section('content')
<div class="container">

  <div class="col-12 text-center mt-5">
    <h1>I miei ristoranti</h1>
  </div>

  <div>
    @if (session('deleted'))
      <div class="alert alert-success">
        <strong>{{session('deleted')}}</strong>
        è stato cancellato correttamente
      </div>
    @endif
  </div>


  @foreach ($restaurants as $restaurant)
    @if (Auth::user()->id === $restaurant->user_id)
      <div class="card row mb-5">
        <div class="d-flex justify-content-between align-items-center">
          <ul class=" list-unstyled m-4">
            <li class="m-4"><strong>Nome:</strong> {{$restaurant->name}}</li>
            <li class="m-4"><strong>Indirizzo:</strong> {{$restaurant->address}}</li>
            <ul class="d-flex list-unstyled m-4">
              @forelse ($restaurant->categories as $category)
                <li class="m-1">
                  <h5>
                    <span class="badge badge-warning">
                      {{$category->name}}
                    </span>
                  </h5>
                </li>
              @empty
                <li class="m-1">-</li>
              @endforelse
            </ul>
            <li class="ml-4 mt-5">
              <form action="{{route('admin.restaurants.destroy',$restaurant)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">
                  CANCELLA
                </button>
              </form>
            </li>
          </ul>
  
          <div class="m-5 col-2 text-center">
            <a class="btn btn-outline-success" href="{{route('admin.restaurants.edit',$restaurant)}}">
              Modifica
            </a>

            <a class="btn btn-success" href="{{route('admin.restaurants.show',$restaurant->id)}}">
              Menù
            </a>
            <a class="btn btn-outline-secondary mt-3" href="{{route('admin.orders.show',$restaurant)}}">
              Ordini
            </a>
          </div>
        </div>
      </div>
    @endif
    
  @endforeach

  <div class="col-12 d-flex justify-content-between align-items-center">
    <a class="btn btn-secondary" href="{{route('admin.home')}}">
      << I miei dati
    </a>

    <div class="d-flex align-items-center">
      <a class="mr-4 btn btn-outline-success" href="{{route('admin.meals.create')}}">
        Aggiungi un piatto
      </a>
      <a class="btn btn-outline-primary " href="{{route('admin.restaurants.create')}}">
        Aggiungi ristorante
      </a>
    </div>
  
     
  </div>

  
</div>
@endsection