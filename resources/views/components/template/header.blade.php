<style>
    header{
        min-height: 600px;
        background-image: url(/img/grafico.svg), url(/img/grafico.svg), url(/img/header.jpg);
        background-color: linear-gradient(to right, #080808, rgba(68 69 65 / 50%));
        background-repeat: no-repeat;
        background-size: 400px, 400px, cover, cover;
        background-position: top left, bottom right, center center, center center;
    }

</style>


<header class="">

    @if (Route::has('login'))
        <nav class="header__navegacion mx-3 flex flex-1 justify-end">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif


    <div class="header__contenido font-bold flex lg:justify-center lg:col-start-2">
        <a href="#">
            <h1 class="header__logo">
                &#60;OpenWebCongress />
            </h1>
        </a>
        <p class="header__texto">Julio 5-6 - 2023</p>
        <p class="header__texto header__texto--modalidad">En Línea - Presencial</p>

        <a href="{{ route('register') }}" class="botn">Comprar Pase</a>
    </div>
</header>
