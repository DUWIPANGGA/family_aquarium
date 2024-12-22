<li class="nav-item">
    @if (Auth::check())
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-black px-4 hover:underline">Logout</button>
        </form>
    @else
        <a href="{{ route('register') }}" class="text-black px-4 hover:underline">Register</a>
    @endif
</li>

