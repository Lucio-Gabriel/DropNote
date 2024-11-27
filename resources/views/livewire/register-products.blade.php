<div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <x-slot name="header">
        Cadastre seu produto
    </x-slot>

    <x-bottom>
        <h1 class="flex items-center justify-center">
            Preencha o formulario para cadastrar o seu produto
        </h1>

            <form class="max-w-sm mx-auto mt-5">
            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Nome do produto
            </label>

            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <span class="text-white pl-0.5 text-base">
                        <i class="bi bi-box-seam"></i>
                    </span>
                </span>
                <input type="text" id="#" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <label for="" class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Tipo do produto
            </label>

            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <span class="text-white  text-base">
                        <i class="bi bi-basket3"></i>
                    </span>
                </span>
                <input type="text" id="#" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <label for="" class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Descrição
            </label>

            <div class="flex">
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Descrição do produto">
                </textarea>
            </div>

            <label for="" class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Nicho
            </label>

            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <span class="text-white pl-0.5 text-base">
                        <i class="bi bi-clipboard"></i>
                    </span>
                </span>
                <input type="text" id="#" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <label for="" class="mt-5 block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Link do produto
            </label>

            <div class="flex">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <span class="text-white pl-0.5 text-base">
                        <i class="bi bi-link-45deg"></i>
                    </span>
                </span>
                <input type="text" id="#" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>

            <div class="mt-5 flex items-center justify-end gap-4">
                <a href="{{ route('products') }}" class="text-white text-base bg-second-color py-3 px-4 rounded-lg hover:scale-105 duration-300">
                    Cancelar
                    <span class="pl-1"><i class="bi bi-x-octagon"></i></span>
                </a>

                <button type="button" class="text-second-color text-base bg-white py-3 px-4 rounded-lg hover:scale-105 duration-300">
                    Salvar produto
                    <span class="pl-1"><i class="bi bi-box-seam"></i></span>
                </button>
            </div>

            </form>
    </x-bottom>
</div>

