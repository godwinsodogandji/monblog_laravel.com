@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('contenu')
    <h2>Mes articles</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <p>
        <a href="/articles/create" class="btn btn-primary">Créer un article</a>
    </p>
    <!-- Liens de pagination -->
    @each('articles.partials.index', $articles, 'article', 'articles.partials.no-articles')
    <div class="d-flex justify-content-center">
        {{$articles->links()}}
    </div>
@endsection
