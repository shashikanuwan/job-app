<x-app-layout>

    <x-dashboard-header />
    <x-admin-navigation />

    <div class="flex mx-3 justify-center mt-6 sm:px-6 lg:px-8">
        <div>
            <div>
                <p class="mt-6 text-center text-xl font-extrabold text-gray-900">
                    Create New Category
                </p>
            </div>

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <div>
                <form class="mt-8 space-y-6" action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="md:grid md:grid-cols-2 gap-6 mt-4">
                        <div class="mt-5 md:mt-2">
                            <label for="">Category Name <span class="text-red-500">*</span></label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}"
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Create Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
