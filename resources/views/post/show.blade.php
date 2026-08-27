<h1>{{ $post->title }}</h1>
<h6>{{ $post->created_at }} : {{ $post->updated_at }}</h6>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.index') }}">Go to posts</a>