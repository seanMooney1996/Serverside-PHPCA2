<nav class=" navClass">
    <div class="leftNav">
        <div class="navButton">
            <a class="no-underline hover:underline" href="/">Home</a>
        </div>
        <div class="navButton">
            <a class="no-underline hover:underline" href="/blog">Reviews</a>
        </div>
    </div>
        <img class="imageNav" src="images/Elden-Ring-Logo-PNG-Photo.png" alt="">


        <div class="userSection">
            @guest
            <div class="navButton">
                <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>

            @if (Route::has('register'))
            <div class="navButton">
                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
            @endif
            @else
            <span>{{ Auth::user()->name }}</span>

            <a href="{{ route('logout') }}"
               class="no-underline hover:underline"
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <div class="navButton">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    @endguest
</nav>
