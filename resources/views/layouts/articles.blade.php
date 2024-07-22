@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('contenu')
    <h2>Mes articles</h2>
    @if ($articles)
        @foreach ($articles as $article)
            <article>
                <h2>{{ $article['title'] }}</h2>
                <p>{{ $article['body'] }}</p>
            </article>
        @endforeach
        @else
        <p>Oop! 😢! Aucun article trouvé.</p>
    @endif
@endsection
