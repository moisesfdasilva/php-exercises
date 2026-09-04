<x-layout>
    <div class="flex itens-center justify-between">
        <h1>Produtos</h1>
        <a href="/produtos/criar">Novo Produto</a>
    </div>
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
                    <tr class="border-b dark:border-neutral-600 hover:bg-neutral-100 dark:hover:bg-neutral-600">
                        <td class="px-6 py-4">{{ $p['name'] }}</td>
                        <td class="px-6 py-4">
                            @if($p->tags->isNotEmpty())
                                <div class="flex flex-wrap gap-1">
                                    @foreach ($p->tags as $tag)
                                        <span class="inlie-flex items-center rounded-full bg-emerald-100 text-emerald-800 px-2 py-0.5 text-xs font-medium">
                                            {{  $tag->name }}
                                        </span>
                                    @endforeach
                                </div>
                            @else
                                <span class="text-neutral-400">sem tags</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">{{ $p['price'] }}</td>
                        <td class="px-6 py-4">
                            <a href="/produtos/{{ $p['id'] }}">
                                Editar
                            </a> |
                            <button form="delete-form-{{ $p['id'] }}">
                                Deletar
                            </button>
                        </td>
                    </tr>
                    <form
                        method="POST"
                        action="/produtos/{{ $p['id'] }}"
                        id="delete-form-{{ $p['id'] }}"
                    >
                        @csrf
                        @method('DELETE')
                    </form>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{ $products->links() }}
    </div>

</x-layout>
