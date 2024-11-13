<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-200">
        {{-- como devemos chamar o link no front. --}}
        {{-- @if (Route::has('login'))
            <livewire:welcome.navigation />
        @endif --}}

        <main class="flex items-center justify-center pt-36 pr-24">
            <section>
                <img src="images/caixa_roxa.png" alt="caixa-logo">
            </section>

            <section class="text-center">
                <h1 class="text-primary-color text-4xl font-semibold">
                    DropNote
                </h1>

                <p class="text-primary-color text-xl">
                    Seu espaço para organizar anotações sobre <br>
                    lojas, produtos e conteúdos em <span class="font-semibold">dropshipping</span>.
                </p>

                <div class="flex items-center justify-center gap-5 pt-5">
                    <a href="{{ route('login') }}" class="text-white bg-primary-color py-3 px-4 rounded-lg font-semibold hover:bg-purple-600  hover:scale-100 duration-200 shadow-lg shadow-purple-600">
                        Entrar
                    </a>

                    <a href="{{ route('register') }}" class="text-white bg-primary-color py-3 px-4 rounded-lg font-semibold hover:bg-purple-600  hover:scale-100 duration-200 shadow-lg shadow-purple-600">
                        Cadastrar-se
                    </a>
                </div>
            </section>
        </main>



    </body>
</html>
