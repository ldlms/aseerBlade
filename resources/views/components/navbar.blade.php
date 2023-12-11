<!-- mobile -->
<div class="{{ Auth::check() ? 'bg-green-800' : 'bg-blue-800' }} lg:hidden">
<header class="text-center py-4">
    <img src="votre-logo.png" alt="Logo" class="mx-auto h-12">

    @if (Auth::check())
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
        @method('POST')
    </form>
    <h1 class="text-lg font-semibold">
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="text-white">
            Bienvenue {{ Auth::user()->name }}
        </a>
    </h1>
@else
    <h1 class="text-lg font-semibold">Nom du Site</h1>
@endif
</header>

<!-- Menu burger pour mobile -->
<div class="flex justify-between items-center lg:hidden py-4">
<button class="block text-white focus:outline-none lg:hidden">
            <!-- Icône de menu burger -->
            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                <path
                    d="M4 6h16M4 12h16M4 18h16"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </button>
</div>
</div>

<!-- desktop -->
<div class="{{ Auth::check() ? 'bg-green-800' : 'bg-blue-800' }} hidden lg:block">
<header class="text-center py-4">
    <img src="votre-logo.png" alt="Logo" class="mx-auto h-12">
    @if (Auth::check())
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
        @method('POST')
    </form>
    <h1 class="text-lg font-semibold">
        <a href="{{ route('logout') }}" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="text-white">
            Bienvenue {{ Auth::user()->name }}
        </a>
    </h1>
@else
    <h1 class="text-lg font-semibold">A.S.E.E.R</h1>
@endif
</header>
<nav class="flex justify-center items-center py-4 hidden lg:flex">
    <a href="#" class="text-white px-4">Menu 1</a>
    <a href="#" class="text-white px-4">Menu 2</a>
    <a href="#" class="text-white px-4">Menu 3</a>
    <!-- ... Ajoutez d'autres éléments de menu ... -->
</nav>
</div>