<header>
    <div class="navbar">
        <div class="logo"><a href="{{ route('home') }}">Circular Hub </a></div>
        <ul class="links">
            <li><a href="{{ route('what') }}">What?</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="{{ route('companies') }}">Companies</a></li>
            <li><a href="{{ route('questions') }}">Circular Forum</a></li>
        </ul>
        @if (auth()->check())
            <!-- Check if the user is logged in -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="action_btn">Logout</button> <!-- Logout button -->
            </form>
        @else
            <a href="{{ route('register') }}" class="action_btn">Register</a>
            <a href="{{ route('login-page') }}" class="action_btn">Sign In</a>
        @endif
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="dropdown_menu">
            <li><a href="{{ route('what') }}">What?</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="{{ route('companies') }}">Companies</a></li>
            <li><a href="{{ route('questions') }}">Circular Forum</a></li>
            @if (auth()->check())
                <!-- Check if the user is logged in -->
                <li><a href="{{ route('logout') }}" class="action_btn">Logout</a></li> <!-- Logout button -->
            @else
                <li><a href="{{ route('register') }}" class="action_btn">Register</a></li>
                <li><a href="{{ route('login-page') }}" class="action_btn">Sign In</a></li>
            @endif
        </div>
</header>
