@extends('layouts.master')

@section('title')
    Créer un article
@endsection

@section('contenu')
    <form method="POST" action="{{route("articles.update", $article->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Cross Site Resource Forgery --}}
        <div class="mb-3 form-floating">
            <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="title" aria-describedby="emailHelp" value="{{old('title', $article->title)}}">
            <label for="title" class="form-label">Titre de l'article</label>
            {{-- Message d'erreur pour le titre --}}
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 form-floating">
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" style="height: 300px"
                placeholder="Entrer le contenu de l'article">{{old('body', $article->body)}}</textarea>
            <label for="body" class="form-label">Corps de l'article</label>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Choisir une image pour l'article </label>
            @if ($article->image)
            <img src="{{asset('storage/'.$article->image)}}" alt="image de l'article" class="img-thumbnail mb-3" width="200">
            @endif
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection
