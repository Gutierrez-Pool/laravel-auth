@extends('layouts.app')

@section('content')

    <div class="container py-4">

        {{-- @dump($user) --}}

        <h1>Pagina Amministratore</h1>
        <hr>
        <h3>Benvenuto {{$user->name}}</h3>

    </div>
    
@endsection