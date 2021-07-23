@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center d-flex flex-column align-items-center">
                <div class="col-12 text-center">
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
                </div>

                <div class="d-flex flex-column col-4">
                    <a class="btn btn-primary mt-5" href="{{route('admin.restaurants.index')}}">
                        I miei ristoranti
                    </a>   
    
                    <a class="btn btn-outline-primary mt-3" href="{{route('admin.restaurants.create')}}">
                        Aggiungi ristorante
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
