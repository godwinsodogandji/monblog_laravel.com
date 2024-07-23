@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('contenu')
    <h2>Mes articles</h2>
    @each('articles.partials.index', $articles, 'article', 'articles.partials.no-articles')
@endsection
