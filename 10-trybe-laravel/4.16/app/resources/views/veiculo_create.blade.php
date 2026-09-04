<x-layout>    
    <h1>Novo Veiculo</h1>
    <form method="POST" action="/veiculos" class="mt-6 max-w-lg space-y-4">
        @csrf
        <div class="space-y-2">
            <label for="license_plate" class="text-sm font-medium text-heading">Placa</label>
            <input
                id="license_plate"
                name="license_plate"
                type="text"
                class="w-full rounded-base border border-deafault px-3 py-2"
            />
            <span>
                @error('license_plate')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="space-y-2">
            <label for="model" class="text-sm font-medium text-heading">Modelo</label>
            <input
                id="model"
                name="model"
                type="text"
                class="w-full rounded-base border border-deafault px-3 py-2"
            />
            <span>
                @error('model')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="space-y-2">
            <label for="year" class="text-sm font-medium text-heading">Ano</label>
            <input
                id="year"
                name="year"
                type="number"
                step="1"
                min="1903"
                class="w-full rounded-base border border-deafault px-3 py-2"
            />
            <span>
                @error('year')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="space-y-2">
            <label for="owner" class="text-sm font-medium text-heading">Proprietário</label>
            <input
                id="owner"
                name="owner"
                type="text"
                class="w-full rounded-base border border-deafault px-3 py-2"
            />
            <span>
                @error('owner')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="space-y-2">
            <label for="status_id" class="text-sm font-medium text-heading">Status</label>
            <select
                id="status_id"
                name="status_id"
                class="w-full rounded-base border border-deafault px-3 py-2"
            >
                <option value="">Selecione o status</option>
                @foreach ($status as $s)
                    @php
                        $statusId = data_get($s, 'id');
                    @endphp
                    <option value="{{ $statusId }}">
                        {{ data_get($s, 'nome') }}
                    </option>
                @endforeach
            </select>
            <span>
                @error('status_id')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button
            type="submit"
            class="rounded-base bg-neutral-secondary-medium px-4 py-2 font-semibold text-heading"
        >
            Cadastrar Veículo
        </button>
    </form>
</x-layout>
