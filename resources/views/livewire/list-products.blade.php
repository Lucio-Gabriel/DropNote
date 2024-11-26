
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos Minerados') }}

        </h2>
    </x-slot>

    <div >
        <div class="max-w-full mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-xl font-semibold p-10 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between">
                        <span class="text-2xl">Produtos Minerados Cadastrado</span>
                        <a href="#" class="text-second-color text-base bg-white py-3 px-4 rounded-lg hover:scale-105 duration-300">
                            Cadastrar um produto
                           <span"><i class="bi bi-box-seam"></i></span>
                        </a>
                    </div>

                    <div class="relative overflow-x-auto shadow-md mt-5 sm:rounded-lg w-full">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                         Nome do produto
                                        <span class="text-white pl-0.5 text-base"><i class="bi bi-box-seam"></i></span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo do produto
                                        <span class="text-white  text-base"><i class="bi bi-basket3"></i></span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Descrição
                                        <span class="text-white pl-0.5 text-base"><i class="bi bi-list"></i></span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nicho
                                        <span class="text-white pl-0.5 text-base"><i class="bi bi-clipboard"></i></span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        URL
                                        <span class="text-white pl-0.5 text-base"><i class="bi bi-link-45deg"></i></span>
                                    </th>

                                    {{-- <th scope="col" class="px-6 py-3 pl-36">
                                        URL
                                    </th> --}}

                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $product->product_name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $product->product_type }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->niche }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->url }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar <i class="bi bi-pencil-square"></i></a>
                                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Deletar <i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5">
                        {{ $products->links() }}
                    </div>
            </div>
        </div>
    </div>
</div>



