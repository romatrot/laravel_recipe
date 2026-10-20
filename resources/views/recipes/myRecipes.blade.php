<x-app-layout>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-8">

            <h1 class="text-3xl font-bold">
                Рецепти користувача: {{ auth()->user()->name }}
            </h1>

            <a href="{{ route('createRecipe') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Створити рецепт
            </a>

        </div>

        @if ($recipes->isEmpty())

            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-600">
                    У вас ще немає рецептів.
                </p>
            </div>

        @else

            <div class="space-y-8">

                @foreach ($recipes as $recipe)

                    <div class="bg-white shadow-sm sm:rounded-lg p-6">

                        {{-- Назва --}}
                        <div class="mb-5 flex items-center justify-between">

                            <h2 class="text-2xl font-bold">
                                {{ $recipe->title }}
                            </h2>

                            <div class="flex gap-2">

                                {{-- Редагувати --}}
                                <a href="{{ route('recipeEdit', $recipe->id) }}"
                                   class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                                    Редагувати
                                </a>

                                {{-- Видалити --}}
                                <form action="{{ route('recipeDelete', $recipe->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">
                                        Видалити
                                    </button>
                                </form>

                            </div>

                        </div>

                        {{-- Категорія --}}
                        <div class="mb-4 p-4 bg-purple-50 border-l-4 border-purple-500 rounded">
                            <p class="text-sm font-semibold text-purple-700 mb-1">
                                Категорія
                            </p>

                            <p class="text-gray-700">
                                {{ $recipe->category ?? 'Без категорії' }}
                            </p>
                        </div>

                        {{-- Опис --}}
                        <div class="mb-4 p-4 bg-blue-50 border-l-4 border-blue-500 rounded">
                            <p class="text-sm font-semibold text-blue-700 mb-1">
                                Опис
                            </p>

                            <p class="text-gray-700">
                                {{ $recipe->description }}
                            </p>
                        </div>

                        {{-- Приготування --}}
                        <div class="p-4 bg-green-50 border-l-4 border-green-500 rounded">
                            <p class="text-sm font-semibold text-green-700 mb-1">
                                Приготування
                            </p>

                            <p class="text-gray-700 whitespace-pre-line">
                                {{ $recipe->instruction }}
                            </p>
                        </div>

                    </div>

                @endforeach

                <div>
                    {{ $recipes->links() }}
                </div>
            </div>

        @endif

    </div>
</div>

</x-app-layout>