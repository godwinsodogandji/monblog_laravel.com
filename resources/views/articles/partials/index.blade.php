<article class="card mb-3">
    @if ($article->image)
        <img src="{{ asset('storage/' . $article->image) }}" alt="..." class="img-thumbnail">
    @endif
    <div class="card-body">
        <h2 class="card-title">
            <a href="/articles/{{ $article['id'] }}"> {{ $article['title'] }}</a>

        </h2>

        <p class="card-text">{{ $article['body'] }}</p>
    </div>
</article>
