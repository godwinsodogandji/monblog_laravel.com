<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }
    public function store(RegisterRequest $request)
    {
        // Ici on recupère les données déjà validées
        $validated = $request->validated();

        //créer le nouvel utilisateur

        User::create([
            "name" => $validated["name"],
            "email" => $validated["email"],
            "password" => bcrypt($validated["password"]), //pour encrypter le mot de passe
        ]);


        //connecter l'utilisateur
        $user = User::where("email", $validated["email"])->first();
        Auth::login($user);
        // Redirection
        return redirect()->route("articles.index");
    }
}
