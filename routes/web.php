<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::controller(PagesController::class)->group(function () {
    Route::get("/", "index");
    Route::get("/", "home")->name("home");
    Route::get("/contact-us", "contact");
    Route::get("/about", "about");
});

Route::controller(ArticleController::class)->group(function () {
    Route::get("/articles", "index")->name("articles.index");
    Route::get("/articles/create", "create")->name("articles.create");
    Route::post("/articles", "store")->name("articles.store");
    Route::get("/articles/{article}", "show")->name("articles.show");
    Route::get("/articles/{article}/edit", "edit")->name("articles.edit");
    Route::patch("/articles/{article}", "update")->name("articles.update");
    Route::delete("articles/{article}", "destroy")->name("articles.destroy");

});

// route d'authentification
Route::get("/register", [RegisterController::class, "index"])->name("register"); //Affiche la page d'inscription
Route::post("/register", [RegisterController::class, "store"])->name("register");//permet d'effectuer les enregistrements une fois le formulaire soumis

Route::get("/login", [SessionsController::class, "index"])->name("login"); //Affiche la page de connexion
Route::post('/login', [SessionsController::class, 'login']); //permet d'effectuer la connexion
Route::get('/logout', [SessionsController::class, 'logout'])->name("logout"); //permet de faire la déconnexion

Route::get("/profil", [SessionsController::class, "profil"])->name("profil");


