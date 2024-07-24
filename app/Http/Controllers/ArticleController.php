<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * Afficher toutes les ressources (les articles)
     */
    public function index()
    {
        $articles = Article::latest()->paginate(4);
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
        $validated = $request->validated();// recupère les données déjà validées
        //Gérer la sauvegarde de l'image (s'il y en a )
        if ($request->hasFile("image")) {
            $path = $request
                ->file("image")
                ->store("images", "public");
            $validated["image"] = $path;
        }

        $validated['user_id'] = 1;
        //Envoyer l'article dans la BDD

        Article::create($validated);

        //retourne  sur la page des articles
        return redirect()->route("articles.index")->with("success", "Article crée avec succès !");

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
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     * Mettre à jour une ressource (un article)
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //Les données validées sont déjà disponibles via le UpdateArticleRequest
        $validated = $request->validated();
        //Gestion de l'image
        if ($request->hasFile('image')) {// si on a une image
            //Supprimer l'ancienne image si elle existe
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            //Stocker la nouvelle image
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;

        } else {
            //Garde l'image existante si aucune nouvelle image n'est téléchargée
            $validated['image'] = $article->image;
        }
        //Mettre à jour l'article
        $article->update($validated);

        //Rediriger vers la page de l'article avec
        return redirect()->route('articles.show', $article->id)->with("success", "Article édité avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     * Supprimer une ressource spécifique (un article)
     */
    public function destroy(Article $article)
    {
        if($article->image){ //Vérifier si l'image existe et la supprimer
            Storage::disk("public")->delete($article->image);
        }
       //suppimer l'article de la base de donnéé
       $article->delete();
       //Redigirer vers la liste des articles avec des messages
       return redirect()->route("articles.index")->with("success","Suppression avec succès");
    }
}
