<x-app-layout>

    <x-dashboard-header />
    <x-admin-navigation />

    <div class="flex items-center justify-center my-4 text-center">
        <a href="{{ route('category.create') }}" class="text-lime-500 border-lime-300 rounded-md flex">
            <svg class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Create New Category
        </a>
    </div>

    <x-fetch-category />

</x-app-layout>
