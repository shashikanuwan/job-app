<section class="antialiased px-4 mt-6">
    <div class="flex flex-col justify-center h-full">
        <div class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">Previous Job Request</h2>
            </header>

            <div>
                <!-- Session Status -->
               <x-auth-session-status class="mb-4" :status="session('status')" />

               <!-- Validation Errors -->
               <x-auth-validation-errors class="mb-4" :errors="$errors" />
            </div>

            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold text-orange-400 bg-gray-500">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Applied At</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Employee Detail</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Download CV</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Job Detail</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Status</div>
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
                                    <a href="{{route('cv.download', $applying)}}" class="font-medium text-lime-600">Download</a>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">Title : {{$applying->job->title}}</div>
                                    <div class="font-medium">Sub Category : {{$applying->job->subCategory->name}}</div>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <form action="{{route('status.update', $applying)}}" method="POST">
                                        @csrf
                                    <select name="status">
                                        <option selected disabled>{{$applying->status}}</option>
                                        <option value="accepted">Accepted</option>
                                        <option value="hold">Hold</option>
                                        <option value="reject">Reject</option>
                                    </select>

                                    <button type="submit" class="text-center text-indigo-400 font-bold rounded p-2 focus:outline-none bg-opacity-40 border-2 border-indigo-400">
                                        Update
                                    </button>
                                </form>
                                </td>

                            </tr>
                            @empty
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 p-3 rounded relative my-6 w-full shadow" role="alert">
                                <strong class="font-bold">oops!</strong>
                                <span class="block sm:inline">Employees have not applied yet</span>
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
