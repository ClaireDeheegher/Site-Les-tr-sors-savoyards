@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Utilisateurs</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Créer un Utilisateur</a>

        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <!-- Ajouter ici d'autres actions comme Modifier et Supprimer si nécessaire -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
