<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;

    /**
     *
     */
     class AuthController extends Controller
    {

        public function register()
        {
            $users = User::all();
            //return view('users.register');
            return view('auth.register');
        }


        public function logout(Request $request)
        {
            $request->user()->tokens()->delete();

            return response()->json([
                'message' => 'Déconnexion réussie!'
            ], 200);
        }

         public function store(Request $request)
         {
             // Valider les données du formulaire
             $request->validate([
                 'name' => 'required|string|max:255',
                 'lastname' => 'required|string|max:255',
                 'birthday' => 'required|date',
                 'gender' => 'required|string|max:1',
                 'address' => 'required|string|max:255',
                 'address2' => 'required|string|max:255',
                 'zipcode' => 'required|string|max:10',
                 'town' => 'required|string|max:255',
                 'country' => 'required|string|max:255',
                 'phone' => 'required|string|max:15',
                 'email' => 'required|string|email|max:255|unique:users',
                 'password' => 'required|string|min:8',
             ]);

             // Créer un nouvel utilisateur
             $user = User::create([
                 'name' => $request->name,
                 'lastname' => $request->lastname,
                 'birthday' => $request->birthday,
                 'gender' => $request->gender,
                 'address' => $request->address,
                 'address2' => $request->address2,
                 'zipcode' => $request->zipcode,
                 'town' => $request->town,
                 'country' => $request->country,
                 'phone' => 'required|string|max:15',
                 'email' => $request->email,
                 'password' => 'required|string|min:8',
             ]);

             // Créer un token d'API
             $token = $user->createToken('auth_token')->plainTextToken;

             // Redirection avec un message de succès et le token
             return redirect()->route('users.create')->with('success', 'Utilisateur créé avec succès.')->with('token', $token);
         }

    }



