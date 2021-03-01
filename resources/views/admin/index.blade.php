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
@endsection


{{-- Istruzioni:
Separate le routes pubbliche da quelle dell'admin, 
        creando anche controllers separati per l'amministratrore.

Implementate il crud posts completo (solo per l'utente autenticato), 
        creando quindi modello, controller, migrazione e seeder.
        
Create anche una pagina blog dove l'utente non registrato puó vedere gli articoli del blog. --}}
