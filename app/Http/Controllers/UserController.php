<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function index()
        {
            // Vous pouvez définir vos données JSON ici
            $data = [
                'message' => 'Hello World'
            ];

            // Renvoie la réponse en JSON
            return response()->json($data);
        }
    }
