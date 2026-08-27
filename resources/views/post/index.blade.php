@forelse ($posts as $post)
    <div class="post">
            <h3>{{ $post->title }}</h3>
            <h5>{{ $post->updated_at }}</h5>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post) }}">Show</a>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>            
        </div>
        <br>
@empty
    <p>Sorry there no posts, but you can add <a href="{{ route('posts.create') }}">one</a>.</p>
@endforelse
    