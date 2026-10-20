<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="text-3xl font-bold mb-8">
                Усі рецепти
            </h1>

            <div class="space-y-8">

                @foreach ($recipes as $recipe)

                    <div class="bg-white shadow-sm sm:rounded-lg p-6">

                        {{-- Назва + кнопка --}}
                        <div class="flex items-center justify-between mb-5">

                            {{-- Назва --}}
                            <h2 class="text-2xl font-bold">
                                {{ $recipe->title }}
                            </h2>

                            @auth
                                <form action="{{ route('addFavoriteRecipe', $recipe) }}" method="POST">
                                    @csrf

                                    <button type="submit"
                                            class="inline-flex items-center gap-2 px-4 py-2
                                                bg-green-600 text-white font-medium
                                                rounded-md shadow-sm
                                                hover:bg-green-700
                                                transition duration-200">
                                        + Додати до улюблених
                                    </button>
                                </form>
                            @endauth

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

        </div>
    </div>

</x-app-layout>
