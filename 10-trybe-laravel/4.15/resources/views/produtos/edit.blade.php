<x-layout>
    <h1>Produto</h1>
    <form method="POST" action="/produtos/ {{ $product->id }}" class="mt-6 max-w-lg space-y-4">
        @csrf
        @method('PATCH')

        <div class="space-y-2">
            <label for="name" class="text-sm font-medium text-heading">Nome</label>
            <input
                id="name"
                name="name"
                type="text"
                class="w-full rounded-base border border-deafault px-3 py-2"
                value="{{ $product->name }}"
            />
            <span>
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="space-y-2">
            <label for="description" class="text-sm font-medium text-heading">Descrição</label>
            <textarea
                id="description"
                name="description"
                type="text"
                class="w-full rounded-base border border-deafault px-3 py-2"
                rows="4"
            >
                {{ $product->description }}
            </textarea>
            <span>
            @error('description')
                {{ $message }}
            @enderror
        </span>
        </div>
        <div class="space-y-2">
            <label for="price" class="text-sm font-medium text-heading">Preço</label>
            <input
                id="price"
                name="price"
                type="number"
                step="0.01"
                min="0"
                class="w-full rounded-base border border-deafault px-3 py-2"
                value="{{ $product->price }}"
            />
            <span>
                @error('price')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="space-y-2">
            <label for="category_id" class="text-sm font-medium text-heading">Categoria</label>
            <select
                id="category_id"
                name="category_id"
                class="w-full rounded-base border border-deafault px-3 py-2"
            >
                <option value="">Selecione uma categoria</option>
                @foreach ($categories as $category)
                    @php
                        $categoryId = data_get($category, 'id');
                    @endphp
                    <option
                        value="{{ $categoryId }}"
                        {{ $categoryId == $product->category_id ? 'selected' : '' }}
                    >
                        {{ data_get($category, 'name') }}
                    </option>
                @endforeach
            </select>
            <span>
                @error('category_id')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button
            type="submit"
            class="rounded-base bg-neutral-secondary-medium px-4 py-2 font-semibold text-heading"
        >
            Criar Produto
        </button>
    </form>
</x-layout>
