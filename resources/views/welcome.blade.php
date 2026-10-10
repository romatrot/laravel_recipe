<x-app-layout>

    <div class="min-h-[calc(100vh-4rem)] bg-gray-50">

        {{-- About section --}}
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-6">

                <div class="max-w-3xl mx-auto text-center">

                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Що є на сайті?
                    </h2>

                    <p class="mt-4 text-gray-600 text-lg">
                        Тут зібрані рецепти різноманітних страв,
                        які можна легко переглядати та знаходити.
                    </p>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">

                    {{-- Card 1 --}}
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100
                                hover:shadow-md transition duration-200">

                        <div class="w-12 h-12 flex items-center justify-center
                                    bg-orange-100 rounded-lg text-2xl">
                            🍳
                        </div>

                        <h3 class="mt-5 text-xl font-semibold text-gray-900">
                            Різноманітні рецепти
                        </h3>

                        <p class="mt-3 text-gray-600 leading-relaxed">
                            Перші страви, основні страви, салати,
                            десерти та багато іншого.
                        </p>

                    </div>


                    {{-- Card 2 --}}
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100
                                hover:shadow-md transition duration-200">

                        <div class="w-12 h-12 flex items-center justify-center
                                    bg-orange-100 rounded-lg text-2xl">
                            🔎
                        </div>

                        <h3 class="mt-5 text-xl font-semibold text-gray-900">
                            Зручний пошук
                        </h3>

                        <p class="mt-3 text-gray-600 leading-relaxed">
                            Легко знаходь потрібні рецепти та
                            обирай страву відповідно до своїх побажань.
                        </p>

                    </div>


                    {{-- Card 3 --}}
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100
                                hover:shadow-md transition duration-200">

                        <div class="w-12 h-12 flex items-center justify-center
                                    bg-orange-100 rounded-lg text-2xl">
                            ❤️
                        </div>

                        <h3 class="mt-5 text-xl font-semibold text-gray-900">
                            Улюблені страви
                        </h3>

                        <p class="mt-3 text-gray-600 leading-relaxed">
                            Знаходь рецепти, які захочеться приготувати
                            знову, та створюй власну кулінарну колекцію.
                        </p>

                    </div>

                </div>

            </div>
        </section>


        {{-- Idea section --}}
        <section class="bg-gray-900">
            <div class="max-w-7xl mx-auto px-6 py-16">

                <div class="max-w-3xl mx-auto text-center">

                    <h2 class="text-3xl md:text-4xl font-bold text-white">
                        Ідея проєкту
                    </h2>

                    <p class="mt-5 text-lg text-gray-300 leading-relaxed">
                        Цей сайт створений для того, щоб зробити пошук
                        та перегляд рецептів простим і зручним.
                        Користувачі можуть знаходити цікаві страви,
                        переглядати їх опис та готувати за покроковими рецептами.
                    </p>

                </div>

            </div>
        </section>


        {{-- Footer --}}
        <footer class="bg-white border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-6 py-8">

                <div class="flex flex-col md:flex-row
                            justify-between items-center gap-4">

                    <p class="text-sm text-gray-500">
                        © {{ date('Y') }} RecipeHub. Усі права захищені.
                    </p>

                    <p class="text-sm text-gray-500">
                        Створено для тих, хто любить готувати ❤️
                    </p>

                </div>

            </div>
        </footer>

    </div>

</x-app-layout>