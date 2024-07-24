@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary w-15">Connexion</button>
            <h2 class="text-center">Nouvel Utilisateur</h2>
            <form method="POST" action="{{ route('users.store') }}" class="vstack gap-3 mx-auto w-25">
                @csrf
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last name :</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" value="{{ old('lastname') }}" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday :</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" value="{{ old('birthday') }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender :</label>
                    <input type="text" id="Gender" name="gender" class="form-control" value="{{ old('gender') }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address :</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
                </div>
                <div class="form-group">
                    <label for="address2">Address 2 :</label>
                    <input type="text" id="address2" name="address2" class="form-control" value="{{ old('address2') }}" required>
                </div>
                <div class="form-group">
                    <label for="zipcode">Zipcode :</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control" value="{{ old('zipcode') }}" required>
                </div>
                <div class="form-group">
                    <label for="town">Town :</label>
                    <input type="text" id="town" name="town" class="form-control" value="{{ old('town') }}" required>
                </div>
                <div class="form-group">
                    <label for="country">Country :</label>
                    <input type="text" id="country" name="country" class="form-control" value="{{ old('country') }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
