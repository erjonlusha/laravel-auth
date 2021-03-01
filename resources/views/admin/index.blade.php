@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
    <a href="{{ route('admin.posts.create')}}" class="btn">Create new post</a>
@endsection


{{-- Istruzioni:
Implementate il crud posts completo (solo per l'utente autenticato), 
        creando quindi modello, controller, migrazione e seeder.--}}
