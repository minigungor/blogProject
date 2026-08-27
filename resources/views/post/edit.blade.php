<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $post->title) }}" placeholder="Title">
    <textarea name="content" id="content" placeholder="content">{{ old('content', $post->content) }}</textarea>

    <button type="submit">Update</button>
</form>
<form action="{{ route('posts.destroy', $post) }}" method="post">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>