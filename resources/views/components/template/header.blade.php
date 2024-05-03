<style>
    header{
        min-height: 600px;
        background-image: url(/img/grafico.svg), url(/img/grafico.svg), linear-gradient(to right, #1a1b15, rgba(26,27,21,0.5)), image-set(url(/img/header.avif) 1x, url(/img/header.webp) 1x, url(/img/header.jpg) 1x);

        background-repeat: no-repeat;
        background-size: 400px, 400px, cover, cover;
        background-position: top left, bottom right, center center, center center;
    }

    .header__navegacion{
        padding: 50px 0;
        display: flex;
        justify-content: center;
    }

    .header__enlace{
        color: white;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: bold;
        }
    .header__enlace:hover{
        color: blue;
        }

   .header__contenido{
        padding-top: 100px;
        display: flex;
        flex-direction: column;
       }

    .header__logo{
        font-size: clamp(25px, 6vw, 80px);
        display: inline-block;
        color: white;
        background: linear-gradient(to right, #02407a, #01efe7);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        margin: 0 auto;
    }

    .header__texto{
        font-size: 25px;
        font-weight: bold;
        color: white;
        margin: 8px 0;
        text-align: center;
    }

    .header__texto--modalidad{
        font-size: 18px;
    }

    .boton {
        margin: 0 auto;
        text-align: center;
    }

   @media screen and (min-width: 576px) {
        .header__navegacion {
            justify-content: flex-end;
        }
        .header__contenido{
            padding-top: 50px;
        }
        .header__texto{
            text-align: left;
            width: auto;
        }
        .boton {
            margin: 0 auto;
            text-align: center;
        }

    }

    .barra__contenido{
        font-size: clamp(20px, 3vw, 30px);
    }
</style>


<header class="header container mx-auto px-8">

    @if (Route::has('login'))
        <nav class="header__navegacion">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="header__enlace rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    {{ __('Dashboard') }}
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="header__enlace rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    {{ __('Log in') }}
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="header__enlace rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        {{ __('Register') }}
                    </a>
                @endif
            @endauth
        </nav>
    @endif


    <div class="header__contenido font-bold flex lg:justify-center lg:col-start-2">
        <a href="/">
            <h1 class="header__logo">
                &#60;OpenWebCongress />
            </h1>
        </a>
        <p class="header__texto">Julio 5-6 - 2023</p>
        <p class="header__texto header__texto--modalidad">En Línea - Presencial</p>

        <x-button>
            <a href="{{ route('register') }}" class="boton">Comprar Pase</a>
        </x-button>

    </div>
</header>

<div class="flex justify-between container mx-auto h-fit">
    <div class="flex-col md:flex-row flex justify-between bg-blue-700 w-full px-4 ">
        <!-- Logo -->
        <div class="shrink-0 flex justify-center items-center md:items-center text-white text-3xl font-bold">
            <a href="{{ route('dashboard') }}" class="barra__contenido">
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex sm:flex-col md:flex-row ">
            <x-nav-link class="text-white text-xl" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Evento') }}
            </x-nav-link>
            <x-nav-link class="text-white text-xl" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Paquetes') }}
            </x-nav-link>
            <x-nav-link class="text-white text-xl" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Workshops / Conferencias') }}
            </x-nav-link>
            <x-nav-link class="text-white text-xl" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Comprar Pases') }}
            </x-nav-link>
            <x-nav-link class="text-white text-xl" href="{{ route('register') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
    </div>
</div>
