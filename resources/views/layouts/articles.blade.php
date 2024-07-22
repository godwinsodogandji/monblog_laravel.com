@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('contenu')
    <h2>Mes articles</h2>
    @each('articles.index', $articles, 'article', 'articles.no-articles')
@endsection
