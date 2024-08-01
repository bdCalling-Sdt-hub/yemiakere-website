<!-- Header Start  -->

<header>
    <div class="logo-container">
        <a href="{{ route('home') }}"><img style="width: 113px;height: auto" src="../../Assets/images/logo.png" alt="A4C Prod Logo" class="logo"></a>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{route('books')}}">Books</a></li>
            <li><a href="{{route('training')}}">Training</a></li>
            @if (Auth::check())
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <li><a>Welcome , {{ Auth::user()->username }}</a></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('signup') }}">SignUp</a></li>
            @endif
        </ul>
    </nav>
</header>

<!-- Header End  -->
