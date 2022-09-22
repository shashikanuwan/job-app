<section class="antialiased px-4 mt-6">
    <div class="flex flex-col justify-center h-full">
        <div class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">All Job Request</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Applied At</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Employee Detail</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">View CV</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Job Detail</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Action</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y">
                            @forelse ($applyings as $applying)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">{{$applying->created_at->format('M d ,Y - h:i a')}}</div>
                                </td>

                                <td class="p-2 ">
                                    <div class="">
                                        <div class="font-medium">Full Name : {{$applying->employee->name}}</div>
                                        <div class="font-medium">Phone Number : {{$applying->employee->phone_number}}</div>
                                        <div class="font-medium">Email : {{$applying->employee->phone_number}}</div>
                                        <div class="font-medium">Current working status : {{$applying->working_status}}</div>
                                    </div>
                                </td>

                               <td class="p-2 whitespace-nowrap">
                                    <a href="{{route('cv.show', $applying)}}" class="font-medium text-lime-600">View</a>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">Title : {{$applying->job->title}}</div>
                                    <div class="font-medium">Sub Category : {{$applying->job->subCategory->name}}</div>
                                </td>

                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                <strong class="font-bold">oops!</strong>
                                <span class="block sm:inline">Employee has not applied yet</span>
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
