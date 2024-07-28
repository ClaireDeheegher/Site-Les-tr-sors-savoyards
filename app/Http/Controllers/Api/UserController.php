<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string|max:1',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'zipcode' => 'required|string|max:10',
            'town' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
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

        return response()->json(['message' => 'Utilisateur créé avec succès!', 'user' => $user]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string|max:1',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'zipcode' => 'required|string|max:10',
            'town' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);
        $user->fill($request->except('password'));

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return response()->json(['message' => 'Utilisateur mis à jour avec succès.']);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Utilisateur supprimé avec succès.']);
    }
}
