@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-12 text-center">
    <h1>Modifica</h1>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('admin.meals.store')}}" method="POST">
    @csrf
    @method('post')

    <div class="mt-3">
      <label class="label-control" for="name">Nome</label>
      <input 
      class="form-control @error('name') is-invalid @enderror " type="text" name="name" id="name"
      value="{{old('name')}}"
      >
      @error('name')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3">
      <label class="label-control" for="description">Descrizione</label>
      <textarea 
      class="form-control @error('description') is-invalid @enderror " type="text" name="description" id="description"
      rows="5"
      >{{old('description')}}</textarea>
      @error('description')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3 d-none">
      <label class="label-control" for="restaurant_id">Numero identificativo ristoratore</label>
      <input 
      class="form-control" type="text" name="restaurant_id" id="restaurant_id"
      @foreach ($restaurants as $restaurant)
        @if (Auth::user()->id === $restaurant->user_id)
          value="{{$restaurant->id}}"
        @endif
      @endforeach
      readonly="readonly"
      >
    </div>

    <div class="mt-3">
      <label class="label-control" for="price">Prezzo</label>
      <input 
      class="form-control @error('price') is-invalid @enderror " type="number" name="price" id="price"
      value="{{old('price')}}"
      >
      @error('price')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3">
      <label class="label-control" for="img">Link Immagine</label>
      <input 
      class="form-control @error('img') is-invalid @enderror " type="text" name="img" id="img"
      value="{{old('img')}}"
      >
      @error('img')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3">
      <label class="label-control" for="available">Disponibilità</label>
      <select class="form-control @error('available') is-invalid @enderror" name="available" id="available">
        <option value="">Seleziona disponibilità</option>
        <option value="1">Disponibile</option>
        <option value="0">Non Disponibile</option>
      </select>

      @error('available')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3 mb-5">
      <button type="submit" class="btn btn-info">SUBMIT</button>
    </div>
  </form>

  <div class="col-12 d-flex justify-content-between align-items-center">
    {{-- <a class="btn btn-secondary" href="{{route('admin.restaurants.show',$restaurant->id)}}">
      << I miei piatti
    </a> --}}
    <a class="btn btn-success mt-5" href="{{route('admin.restaurants.index')}}">
      I miei ristoranti
    </a> 
  </div> 
  {{-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus magnam veritatis ipsa non facilis maiores tempora obcaecati soluta dolorum, animi delectus at ducimus dolor aut labore atque odio illum. Quae? --}}
</div>
@endsection