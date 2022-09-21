<div class="justify-center px-10 py-10 grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">
    @forelse ($jobs as $job)
        <div
            class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 border-b-2 border-orange-500">
            <div class="py-4 px-4 bg-white">
                <div class="mt-2">
                    <p class="text-lg font-thin text-center"> {{ $job->subCategory->name }}</p>
                </div>

                <p class="text-sm font-semibold text-gray-500">{{ $job->subCategory->category->name }}</p>

                <div class="mt-2">
                    <span class="text-sm text-sky-600">Company : </span>
                    <p class="text-md">{{ $job->employer->name }}</p>
                </div>

                <div class="mt-2">
                    <span class="text-sm text-sky-600">Expiry Date :</span>
                    <p class="text-md text-center">{{ $job->expiry_date->toDayDateTimeString() }}</p>
                </div>

                @unlessrole('admin|employer')
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="program_id" value="{{ $job }}">
                        <span class="flex item-center justify-center mt-4">
                            <button type="submit"
                                class="font-semibold text-gray-800 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">Apply</button>
                        </span>
                    </form>
                @endunlessrole
            </div>
        </div>
    @empty
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow"
            role="alert">
            <strong class="font-bold">oops!</strong>
            <span class="block sm:inline">No jobs yet. coming soon!</span>
        </div>
    @endforelse
</div>

<div class="px-5 py-5 bg-gray-100 border-t flex flex-col xs:flex-row items-center xs:justify-between">
    {{ $jobs->appends([
            'subCategory' => request()->query('subCategory'),
            'employmentType' => request()->query('employmentType'),
            'district' => request()->query('district'),
        ])->links() }}
</div>
