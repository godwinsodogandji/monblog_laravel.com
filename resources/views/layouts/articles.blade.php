@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('contenu')
    <h2>Mes articles</h2>
    <p>
        <a href="/articles/create" class="btn btn-primary">Créer un article</a>
    </p>
    @each('articles.partials.index', $articles, 'article', 'articles.partials.no-articles')
@endsection
