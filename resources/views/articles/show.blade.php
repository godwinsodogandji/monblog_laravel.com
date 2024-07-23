@extends('layouts.master')

@section('title')
    {{ $article->title }}
@endsection
@section('contenu')
    <article>
        <img src="{{ $article['image'] }}" alt="..." class="img-thumbnail">
        <div class="card-body">
            <h2 class="card-title mb-3 mt-3">
                {{ $article['title'] }}
            </h2>

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
           <div class="col-md-6 mb-3">

            @forelse ($article->comments as $comment)
            <p class="text-primary">User {{$comment->user_id}}</p>
            <small>{{$comment['comment']}}</small>
            @empty
            <p>Aucun commentaire n'est trouvé</p>
            @endforelse
           </div>
        </div>
    </section>
@endsection
