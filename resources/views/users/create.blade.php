@extends('layouts.app')

@section('content')
    <div id="container-greet">
        <h1>Bienvenue, nous sommes heureux de vous compter parmi nous.</h1>
        <a href="{{ route('welcome') }}">Revenir à l'accueil</a>
    </div>
@endsection

