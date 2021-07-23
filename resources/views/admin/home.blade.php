@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
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
                <a class="btn btn-primary mt-5" href="{{route('admin.restaurants.index')}}">
                    I miei ristoranti
                </a>
                {{-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
