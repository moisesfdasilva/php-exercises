<x-layout>    
    <h1 class="mb-4 text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">
        {{ $veiculo['modelo'] }} ({{ $veiculo['placa'] }}):
    </h1>
    <p class="mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Modelo: {{ $veiculo['modelo'] }};
    </p>
    <p class="mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Ano: {{ $veiculo['ano'] }};
    </p>
    <p class="mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Placa: {{ $veiculo['placa'] }};
    </p>
    <p class="mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Proprietário: {{ $veiculo['proprietario'] }};
    </p>
    <p class="mb-6 text-lg font-normal text-body lg:text-xl sm:px-16 xl:px-48">
        Status: {{ $veiculo['status'] }}.
    </p>
</x-layout>
