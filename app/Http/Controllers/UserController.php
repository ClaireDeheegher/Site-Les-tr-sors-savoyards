<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function index()
        {
            $users = User::all();
            return view('users.index', compact('users'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
         */
        public function create()
        {
            return view('users.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\RedirectResponse
         */
        public function store(Request $request)
        {
            // Validation du formulaire (à ajouter si nécessaire)

            // Création d'un nouvel utilisateur
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

            return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succès!');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
         */
        public function show($id)
        {
            $user = User::findOrFail($id);
            return view('users.show', compact('user'));
        }

    }

