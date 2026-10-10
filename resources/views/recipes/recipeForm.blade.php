<x-app-layout>

<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white shadow-sm sm:rounded-lg p-6">

            <h1 class="text-3xl font-bold mb-8">
                Створити рецепт
            </h1>

            <form method="POST" action="{{ route('recipeStore') }}">
                @csrf

                <!-- Title -->
                <div>
                    <x-input-label for="title" :value="__('Назва рецепту')" />

                    <x-text-input
                        id="title"
                        class="block mt-1 w-full"
                        type="text"
                        name="title"
                        :value="old('title')"
                        required
                        autofocus
                    />

                    <x-input-error
                        :messages="$errors->get('title')"
                        class="mt-2"
                    />
                </div>

                <!-- Category -->
                <div class="mt-4">
                    <x-input-label for="category" :value="__('Категорія')" />

                    <x-text-input
                        id="category"
                        class="block mt-1 w-full"
                        type="text"
                        name="category"
                        :value="old('category')"
                        required
                    />

                    <x-input-error
                        :messages="$errors->get('category')"
                        class="mt-2"
                    />
                </div>

                <!-- Description -->
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Опис')" />

                    <textarea
                        id="description"
                        name="description"
                        rows="4"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        required
                    >{{ old('description') }}</textarea>

                    <x-input-error
                        :messages="$errors->get('description')"
                        class="mt-2"
                    />
                </div>

                <!-- Instruction -->
                <div class="mt-4">
                    <x-input-label for="instruction" :value="__('Приготування')" />

                    <textarea
                        id="instruction"
                        name="instruction"
                        rows="8"
                        class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        required
                    >{{ old('instruction') }}</textarea>

                    <x-input-error
                        :messages="$errors->get('instruction')"
                        class="mt-2"
                    />
                </div>

                <!-- Button -->
                <div class="flex items-center justify-end mt-6">

                    <x-primary-button>
                        {{ __('Створити рецепт') }}
                    </x-primary-button>

                </div>

            </form>

        </div>

    </div>
</div>

</x-app-layout>
