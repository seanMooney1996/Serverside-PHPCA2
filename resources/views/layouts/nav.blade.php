<nav class=" navClass">
    <a class="no-underline hover:underline" href="/">Home</a>
    <a class="no-underline hover:underline" href="/blog">Blog</a>
    @guest
        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
        @if (Route::has('register'))
            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    @else
        <span>{{ Auth::user()->name }}</span>

        <a href="{{ route('logout') }}"
           class="no-underline hover:underline"
           onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
    @endguest
</nav>