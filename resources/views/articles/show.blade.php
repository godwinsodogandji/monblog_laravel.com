@extends('layouts.master')

@section('title')
    {{ $article->title }}
@endsection
@section('contenu')
    <article>
        @if ($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="..." class="img-thumbnail">
        @endif
        <div class="card-body">
            <h2 class="card-title mb-3 mt-3">
                {{ $article['title'] }}
            </h2>
            <span class="badge text-bg-secondary"> Auteur : {{ $article->user->name }}. Crée le
                {{ $article->created_at->toDateString() }}</span>
            <p class="card-text">{{ $article['body'] }}</p>
        </div>
    </article>
    <section class="mb-5">
        <div class="form-floating">
            <h2>
                <label for="comment-input">Commentaires</label>
            </h2>
            <form action="">
                <textarea name="comment" id="comment-input" class="form-control" placeholder="Laisser votre commentaire ici"></textarea>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
        <div class="mt-5">
            @forelse ($article->comments as $comment)
                <div class="mb-3">
                    <p>
                        <span class="badge text-primary">{{ $comment->user->name }}</span>
                        <span class="badge text-bg-secondary">{{ $comment->created_at->diffForHumans() }}</span>
                    </p>
                    <small>{{ $comment['comment'] }}</small>
                @empty
                    <p>Aucun commentaire n'est trouvé</p>
            @endforelse
        </div>
        </div>
    </section>
@endsection
