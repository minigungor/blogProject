<nav>
    <a href="{{ route('posts.index') }}">Posts</a>
    @auth
        <a href="{{ route('posts.create') }}">Create post</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('tags.index') }}">Tags</a>
        <a href="{{ route('users.index') }}">Users</a>
        
        <span>{{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
    
    @guest
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('login') }}">Login</a>
    @endguest
</nav>