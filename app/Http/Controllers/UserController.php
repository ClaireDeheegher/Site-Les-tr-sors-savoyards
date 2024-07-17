<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;

    class UserController extends Controller
    {
        public function index()
        {
            $users = User::all();
            return response()->json($users);
        }

        public function create()
        {
            return view('users.create');
        }

        public function store(Request $request)
        {
            $user = new User([
                'name' => $request->input('name'),
                'lastname' => $request->input('lastname'),
                'birthday' => $request->input('birthday'),
                'gender' => $request->input('gender'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'address2' => $request->input('address2'),
                'zipcode' => $request->input('zipcode'),
                'town' => $request->input('town'),
                'country' => $request->input('country'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            $user->save();

            return response()->json(['message' => 'Utilisateur créé avec succès!', 'user' => $user]);
        }

        public function show($id)
        {
            $user = User::findOrFail($id);
            return response()->json($user);
        }

        public function edit($id)
        {
            $user = User::findOrFail($id);
            return view('users.edit', compact('user'));
        }

        public function update(Request $request, $id): \Illuminate\Http\JsonResponse
        {
            $request->validate([
                'name' => "required|string",
                'lastname' => "required|string",
                'birthday' => "required|date",
                'gender' => "required|string",
                'phone' => "required|string",
                'address' => "required|string",
                'address2' => "nullable|string",
                'zipcode' => "required|string",
                'town' => "required|string",
                'country' => "required|string",
                'email' => "required|string|email",
                'password' => "nullable|string",
            ]);

            $user = User::findOrFail($id);

            $user->name = $request->get('name');
            $user->lastname = $request->get('lastname');
            $user->birthday = $request->get('birthday');
            $user->gender = $request->get('gender');
            $user->phone = $request->get('phone');
            $user->address = $request->get('address');
            $user->address2 = $request->get('address2');
            $user->zipcode = $request->get('zipcode');
            $user->town = $request->get('town');
            $user->country = $request->get('country');
            $user->email = $request->get('email');

            if ($request->filled('password')) {
                $user->password = Hash::make($request->get('password'));
            }

            $user->save();

            return response()->json(['message' => 'Utilisateur mis à jour avec succès.']);
        }

        public function destroy($id)
        {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json(['message' => 'Utilisateur supprimé avec succès.']);
        }
    }
