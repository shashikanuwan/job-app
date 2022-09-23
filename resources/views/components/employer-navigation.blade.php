<nav class="bg-white">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-center">
                <div class=" sm:ml-6">
                    <div class="flex space-x-4">
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('employer.dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>

                            <x-nav-link :href="route('jobs.create')" :active="request()->routeIs('jobs.create')">
                                {{ __('Create Job') }}
                            </x-nav-link>

                            <x-nav-link :href="route('jobs.index')" :active="request()->routeIs('jobs.index')">
                                {{ __('All Job') }}
                            </x-nav-link>

                            <x-nav-link :href="route('previous.job.request')" :active="request()->routeIs('previous.job.request')">
                                {{ __('Previous job request') }}
                            </x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-2 flex-shrink-0 flex items-end">
                {{Auth::user()->user_name}}
            </div>
        </div>
    </div>
</nav>
