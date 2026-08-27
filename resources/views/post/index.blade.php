@if ($posts)
    @foreach ($posts as $post)
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <h5>{{ $post->updated_at }}</h5>
            <hr>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
@else
    Sorry there no posts, but you can add one.
@endif