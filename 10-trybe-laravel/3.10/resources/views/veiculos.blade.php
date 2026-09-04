<x-layout>
    <h1 class="mb-4 text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">
        Veículos
    </h1>

    @foreach ($veiculos as $v)
        <a href="/veiculos/{{ $v['placa'] }}" 
            class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs hover:bg-neutral-secondary-medium">
            <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">
                {{ $v['modelo'] }} ({{ $v['placa'] }})
            </h5>
            <p class="text-body">
                {{ $v['modelo'] }} - {{ $v['ano'] }} ({{ $v['placa'] }}).
            </p>
        </a>
    @endforeach

</x-layout>
