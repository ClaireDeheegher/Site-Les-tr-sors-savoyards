@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    @if(session('token'))
                        <br>Votre token d'API : {{ session('token') }}
                    @endif
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h2 class="text-center">Nouvel Utilisateur</h2>
            <form id="register-form" method="POST" action="{{ route('users.store') }}" class="vstack gap-3 mx-auto w-50">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" id="lastname" name="lastname"  placeholder="Last name"  class="form-control" value="{{ old('lastname') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3 d-flex align-items-center">
                        <label class="col-md-2" for="birthday">Birthday :</label>
                        <input type="date" id="birthday" name="birthday"  placeholder="Birthday"  class="form-control" value="{{ old('birthday') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div id="gender" class="col-md-12 mb-3 d-flex">
                        <label class="col-md-3" for="gender">Gender :</label>
                        <fieldset class="col-md-9 d-flex">
                            <label class="col-md-6" for="gender"> Male <input type="radio" id="Male" name="gender" value="M" checked></label>
                            <label  class="col-md-6" for="gender"> Female <input type="radio" id="Female" name="gender" value="F"></label>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <input type="text" id="address" name="address" placeholder="Address"  class="form-control" value="{{ old('address') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" id="address2" name="address2" placeholder="Complement Address" class="form-control" value="{{ old('address2') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" id="zipcode" name="zipcode" placeholder="Zipcode" class="form-control" value="{{ old('zipcode') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" id="town" name="town" placeholder="Town" class="form-control" value="{{ old('town') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" id="country" name="country"  placeholder="Country"  class="form-control" value="{{ old('country') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" value="{{ old('phone') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 mb-3">
                        <label for="password">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary h-25 w-50">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
@endsection
