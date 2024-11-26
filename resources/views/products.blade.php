<x-app-layout>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos Minerados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-xl p-10 text-gray-900 dark:text-gray-100">
                    {{ __("Qual sera o seu desejo hoje?") }}
                </div>
                {{-- <div class="flex pl-44 mt-24 mb-24">
                    <a href="#">
                        <img src="images/DropNote.png" alt="caixa-logo" class="w-[350px] h-[350px]">
                    </a>

                    <section class="flex flex-col mt-24 pl-44">
                        <a href="#" class="text-white underline underline-offset-4 hover:scale-125 duration-200">Cadastrar produto minerado <span class="pl-1"><i class="bi bi-hammer"></i></span></a>
                        <a href="#" class="text-white underline underline-offset-4 pt-4 hover:scale-125 duration-200">Cadastrar anuncios mais vistos<span class="pl-1"><i class="bi bi-facebook"></i></span></a>
                        <a href="#" class="text-white underline underline-offset-4 pt-4 hover:scale-125 duration-200">Cadastrar concorrentes <span class="pl-1"><i class="bi bi-people-fill"></i></span></a>
                        <a href="#" class="text-white underline underline-offset-4 pt-4 hover:scale-125 duration-200">Cadastrar lojas concorrentes <span class="pl-1"><i class="bi bi-shop"></i></span></a>
                    </section>
                </div> --}}
            </div>
        </div>
    </div>


</x-app-layout>
