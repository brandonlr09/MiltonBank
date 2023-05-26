<div class="container">

    @php $posts = App\Http\Controllers\PostsController::showXArticles(3);  @endphp
    <h1 class="text-center pt-5">Useful Articles</h1>
    <div class="row justify-content-center">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card p-2 m-5 col-sm-6" style="width: 18rem;">
                    {{-- GENERATES A RANDOM IMAGE EACH TIME --}}
                    <img src=<?php echo 'https://picsum.photos/200/100?random=' . rand(1, 50); ?> class="card-img-top rounded" alt="A random image">
                    <h3 class="card-title"><a href="/posts/{{ $post->id }}"
                            class="text-dark">{{ $post->title }}</a></h3>
                    <p class="card-text">{{ Str::limit($post->body, 85) }}</p>
                    <small>Written on {{ $post->created_at }}</small>
                </div>
            @endforeach
            {{-- 9 articles per page --}}
            <div class="d-flex justify-content-center p-3">{{ $posts->links() }}</div>
        @else
            <p class="text-center p-5 bg-light">No articles to show.</p>
        @endif
    </div>
</div>
