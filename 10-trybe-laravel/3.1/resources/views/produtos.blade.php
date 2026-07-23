<x-layout>
    <h1>Produtos</h1>
    <div class="overflow-x-auto bg-white dark:bg-neutral-700">
        <table class="min-w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-winder border-b-2 dark::border-neutral">
                <tr>
                    <th scope="col" class="px-6 py-4">Produto</th>
                    <th scope="col" class="px-6 py-4">Categoria</th>
                    <th scope="col" class="px-6 py-4">Preço</th>
                    <th scope="col" class="px-6 py-4">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr class="border-b dark:border-neutral-600 hover:bg-neutral">
                        <td class="px-6 py-4">{{ $p['name'] }}</td>
                        <td class="px-6 py-4">{{ $p['category'] }}</td>
                        <td class="px-6 py-4">{{ $p['price'] }}</td>
                        <td class="px-6 py-4">
                            <a href="/produtos/{{ $p['id'] }}">
                                Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
