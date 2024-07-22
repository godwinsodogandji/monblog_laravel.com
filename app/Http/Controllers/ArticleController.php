<?php

namespace App\Http\Controllers;

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
        return view("layouts.articles");
    }

    /**
     * Show the form for creating a new resource.
     * Afficher tous les formulaires d'un article
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * On stocke l'article dans la BDD
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Afficher une ressource (article) spécifique
     */
    public function show(Article $article)
    {
        //
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