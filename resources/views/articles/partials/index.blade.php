<article class="card mb-3">
    <img src="{{ $article['image'] }}" alt="..."  class="img-thumbnail">
    <div class="card-body">
        <h2 class="card-title">
            <a href="/article/{{ $article['id'] }}"> {{ $article['title'] }}</a>

        </h2>

        <p class="card-text">{{ $article['body'] }}</p>
    </div>
</article>
