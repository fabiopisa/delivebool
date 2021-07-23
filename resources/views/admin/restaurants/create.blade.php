@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-12 text-center">
    <h1>Aggiungi un ristorante</h1>
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

  <form action="{{route('admin.restaurants.store')}}" method="POST">
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
      <label class="label-control" for="address">Indirizzo</label>
      <input 
      class="form-control @error('address') is-invalid @enderror " type="text" name="address" id="address"
      value="{{old('address')}}"
      >
      @error('address')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>

    <div class="mt-3 d-none">
      <label class="label-control" for="user_id">Numero identificativo ristoratore</label>
      <input 
      class="form-control" type="text" name="user_id" id="user_id"
      value="{{Auth::user()->id}} " readonly="readonly"
      >
    </div>

    

    <div class="mt-5">
      <h3 class="mb-4">Categorie</h3>
      @foreach ($categories as $category )
        <span class="d-inline-block mr-3 col-4">
          {{-- uso $loop->iteration per avere un contatore in base ai cicli --}}
          {{-- al name restituiamo un arrai e lo scriviammo in questo modod  --}}
          <input type="checkbox" 
          id="category{{$loop->iteration}}" 
          name="categories[]" 
          value="{{$category->id}}"
          {{-- faccio un if per dare l'old con la condizione che se nell'array old 'tags' è presente il $tag->id allora do il checked --}}
          @if (in_array($category->id,old('categories',[])))
            checked
          @endif
          >
          <label for="category{{$loop->iteration}}">{{$category->name}}</label>
        </span>
        
      @endforeach
    </div>

    <div class="mt-3 mb-5">
      <button type="submit" class="btn btn-primary">SUBMIT</button>
      <button type="reset" class="btn btn-outline-danger">RESET</button>
    </div>
  </form>

  <div class="col-12 d-flex justify-content-between align-items-center">
    <a class="btn btn-secondary" href="{{route('admin.home')}}">
      << I miei dati
    </a>
    <a class="btn btn-primary mt-5" href="{{route('admin.restaurants.index')}}">
      I miei ristoranti
    </a> 
  </div> 
</div>
@endsection