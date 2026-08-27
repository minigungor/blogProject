<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Title">
    <textarea name="content" id="content" placeholder="content"></textarea>

    <button type="submit">Create</button>
</form>