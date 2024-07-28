@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier Utilisateur</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Prénom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}" required>
            </div>

            <div class="form-group">
                <label for="birthday">Date de naissance</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}" required>
            </div>

            <div class="form-group">
                <label for="gender">Genre</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="M" {{ $user->gender == 'M' ? 'selected' : '' }}>Masculin</option>
                    <option value="F" {{ $user->gender == 'F' ? 'selected' : '' }}>Féminin</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
            </div>

            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" required>
            </div>

            <div class="form-group">
                <label for="address2">Complément d'adresse</label>
                <input type="text" class="form-control" id="address2" name="address2" value="{{ $user->address2 }}">
            </div>

            <div class="form-group">
                <label for="zipcode">Code Postal</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ $user->zipcode }}" required>
            </div>

            <div class="form-group">
                <label for="town">Ville</label>
                <input type="text" class="form-control" id="town" name="town" value="{{ $user->town }}" required>
            </div>

            <div class="form-group">
                <label for="country">Pays</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ $user->country }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">Nouveau mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
