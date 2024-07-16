<!-- resources/views/users/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un Utilisateur</h1>

        <!-- Formulaire de création d'utilisateur -->
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Prénom</label>
                <input type="text" id="lastname" name="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <!-- Ajouter ici d'autres champs selon vos besoins -->
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
