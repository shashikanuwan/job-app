<div class="justify-center px-10 py-10 grid gap-10 lg:grid-cols-3 xl:grid-cols-4 sm:grid-cols-2">
    @forelse ($applyings as $applying)
        <div
            class="max-w-xs rounded-md overflow-hidden shadow-lg hover:scale-105 transition duration-500 border-b-2 border-orange-500">
            <div class="py-4 px-4 bg-white">
                <div class="mt-2">
                    <p class="text-lg font-thin text-center"> {{ $applying->job->subCategory->name }}</p>
                </div>

                <div class="mt-2">
                    <span class="text-sm text-sky-600">Job Title : </span>
                    <span class="text-md text-center">{{ $applying->job->title }}</span>
                </div>

                <div class="mt-2">
                    <span class="text-sm text-sky-600">Main Category : </span>
                    <span class="text-md text-center">{{ $applying->job->subCategory->category->name }}</span>
                </div>

                <div class="mt-2">
                    <span class="text-sm text-sky-600">Company : </span>
                    <span class="text-md text-center">{{ $applying->job->employer->name }}</span>
                </div>

                <div class="mt-2">
                    <span class="text-sm text-sky-600">Job Request Status :</span>
                    <span class="text-md text-center">
                        {{ $applying->status }}
                        @if ($applying->accepted_at)
                          on  {{ $applying->accepted_at->format('Y-m-d') }}
                        @endif
                    </span>
                </div>

                <div class="mt-2">
                    <span class="text-sm text-sky-600">Expiry Date :</span>
                    <span class="text-md text-center">{{ $applying->job->expiry_date->format('Y-m-d') }}</span>
                </div>

                <div class="flex justify-center mt-4">
                    <a href="{{ route('job.show', $applying->job->slug) }}"
                        class="text-center font-semibold text-gray-800 w-full bg-yellow-400 hover:bg-yellow-500 py-1 rounded">
                        Show Job
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow"
            role="alert">
            <strong class="font-bold">oops!</strong>
            <span class="block sm:inline">No Applying yet.</span> <a href="{{route('job.search')}}" class="underline"> Please apply! </a>
        </div>
    @endforelse
</div>

<div class="px-5 py-5 bg-gray-100 border-t flex flex-col xs:flex-row items-center xs:justify-between">

</div>
