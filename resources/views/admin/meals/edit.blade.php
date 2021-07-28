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

  <form action="{{route('admin.meals.update',$meal)}}" method="POST">
    @csrf
    @method('patch')

    <div class="mt-3">
      <label class="label-control" for="name">Nome</label>
      <input 
      class="form-control @error('name') is-invalid @enderror " type="text" name="name" id="name"
      value="{{old('name',$meal->name)}}"
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
      >{{old('description',$meal->description)}}</textarea>
      @error('description')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3 d-none">
      <label class="label-control" for="restaurant_id">Numero identificativo ristoratore</label>
      <input 
      class="form-control" type="text" name="restaurant_id" id="restaurant_id"
      value="{{$meal->restaurant_id}} " readonly="readonly"
      >
    </div>

    <div class="mt-3">
      <label class="label-control" for="price">Prezzo</label>
      <input 
      class="form-control @error('price') is-invalid @enderror " type="number" name="price" id="price"
      value="{{old('price',$meal->price)}}"
      >
      @error('price')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3">
      <label class="label-control" for="img">Link Immagine</label>
      <input 
      class="form-control @error('img') is-invalid @enderror " type="text" name="img" id="img"
      value="{{old('img',$meal->img)}}"
      >
      @error('img')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3">
      <label class="label-control" for="available">Disponibilità</label>
      <select class="form-control @error('available') is-invalid @enderror" name="available" id="available">
        <option value="{{$meal->available = 1}}">Disponibile</option>
        <option value="{{$meal->available = 0}}">Non Disponibile</option>
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
    <a class="btn btn-secondary" href="{{route('admin.restaurants.show',$meal->restaurant_id)}}">
      << I miei piatti
    </a>
    <a class="btn btn-success mt-5" href="{{route('admin.restaurants.index')}}">
      I miei ristoranti
    </a> 
  </div> 
</div>
@endsection