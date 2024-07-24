<!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>Connexion</h2>
            <form method="POST" action="{{ route('auth.login') }}" class="vstack gap-3">
                @csrf
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Connexion</button>
            </form>
        </div>
    </div>
@endsection
