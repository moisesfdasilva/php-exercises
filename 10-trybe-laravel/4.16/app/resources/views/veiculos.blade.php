<x-layout>
    <div class="flex itens-center justify-between py-4">
        <div
            class="inline-block rounded-lg bg-white-600 px-6 py-3 
                    text-center text-sm font-semibold text-black shadow-md transition-all 
                    duration-200"
        >
            <h1>Veículos</h1>
        </div>
        <div
            class="inline-block cursor-pointer rounded-lg bg-blue-600 px-6 py-3 
                    text-center text-sm font-semibold text-white shadow-md transition-all 
                    duration-200 hover:bg-blue-700 active:scale-95 focus:outline-none 
                    focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
            <a href="/veiculos/cadastrar">Novo Veículo</a>
        </div>
    </div>

    @foreach ($veiculos as $v)
        <div
            class="bg-neutral-primary-soft block max-w-sm p-6 border border-default 
                    rounded-base shadow-xs hover:bg-neutral-secondary-medium"
        >
            <a href="/veiculos/{{ $v->placa }}/view">
                <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">
                    {{ $v->modelo }} ({{ $v->placa }})
                </h5>
            </a>
            <p class="text-body">
                {{ $v->modelo }} - {{ $v->ano }} ({{ $v->placa }}).
            </p>
            <div
                class="inline-block cursor-pointer rounded-lg bg-green-600 px-6 py-3 
                        text-center text-sm font-semibold text-white shadow-md transition-all 
                        duration-200 hover:bg-green-700 active:scale-95 focus:outline-none 
                        focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
            >
                <a href="/veiculos/{{ $v->placa }}/edit">
                    Editar
                </a>
            </div>
            <div
                class="inline-block cursor-pointer rounded-lg bg-red-600 px-6 py-3 
                        text-center text-sm font-semibold text-white shadow-md transition-all 
                        duration-200 hover:bg-red-700 active:scale-95 focus:outline-none 
                        focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
            >
                <button form="delete-form-{{ $v->placa }}">
                    Excluir
                </button>
            </div>
            <form
                method="POST"
                action="/veiculos/{{ $v->placa }}/edit"
                id="delete-form-{{ $v->placa }}"
            >
                @csrf
                @method('DELETE')
            </form>
        </div>
    @endforeach
    <div>
        {{ $veiculos->links() }}
    </div>

</x-layout>
