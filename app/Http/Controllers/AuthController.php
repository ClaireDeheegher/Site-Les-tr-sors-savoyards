<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;

    class AuthController extends Controller
    {

        public function register()
        {
            $users = User::all();
            //return view('users.register');
            return view('auth.register');
        }
        public function doLogin(Request $request)
        {
            $request->validate([
                'name' => 'required|string',
                'lastname' => 'required|string',
                'birthday' => 'required|date',
                'gender' => 'required|string',
                'address' => 'required|string',
                'address2' => 'required|string',
                'zipcode' => 'required|string',
                'town' => 'required|string',
                'country' => 'required|string',
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                $token = $user->createToken('Personal Access Token')->plainTextToken;

                return response()->json([
                    'message' => 'Connexion réussie!',
                    'token' => $token,
                    'user' => $user
                ], 200);
            }

            return response()->json([
                'message' => 'Les informations de connexion ne sont pas correctes.'
            ], 401);
        }

        public function logout(Request $request)
        {
            $request->user()->tokens()->delete();

            return response()->json([
                'message' => 'Déconnexion réussie!'
            ], 200);
        }
    }
