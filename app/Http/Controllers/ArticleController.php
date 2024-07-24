<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * Afficher toutes les ressources (les articles)
     */
    public function index()
    {
        $articles = Article::all();
        return view("layouts.articles", ["articles" => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     * Afficher tous les formulaires d'un article
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     * On stocke l'article dans la BDD
     */
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated() ;// recupère les données déjà validées
        //Gérer la sauvegarde de l'image (s'il y en a )
        if ($request->hasFile("image")) {
            $path = $request
            ->file("image")
            ->store("images","public");
            $validated["image"] = $path;
        }
        //Envoyer l'article dans la BDD

        Article::create($validated);

        //retourne  sur la page des articles
        return redirect("/articles")->with("success","Article crée avec succès !");

    }

    /**
     * Display the specified resource.
     * Afficher une ressource (article) spécifique
     */
    public function show($id)
    {
        $article = Article::where("id", $id)->with("comments.user")->first();

        return view("articles.show", ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     * Afficher le formulaire d'édition
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Mettre à jour une ressource (un article)
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * Supprimer une ressource spécifique (un article)
     */
    public function destroy(Article $article)
    {
        //
    }
}
