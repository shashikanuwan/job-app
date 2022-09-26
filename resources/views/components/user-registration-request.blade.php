<section class="antialiased px-4 mt-6">
    <div class="flex flex-col justify-center h-full">
        <div class="w-full max-w-5xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">User Register Request</h2>
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
                                    <div class="font-semibold">Register At</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">User Detail</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Role</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Company Detail</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Action</div>
                                </th>

                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold">Delte User</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y">
                            @forelse ($users as $user)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">{{$user->created_at->format('M d ,Y - h:i a')}}</div>
                                </td>

                                <td class="p-2 ">
                                    <div class="">
                                        <div class="font-medium">Full Name : {{$user->name}}</div>
                                        <div class="font-medium">Phone Number : {{$user->phone_number}}</div>
                                        <div class="font-medium">Email : {{$user->email}}</div>
                                        <div class="font-medium">DOB : {{$user->dob}}</div>
                                    </div>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    @if (implode(', ', $user->roles->pluck('name')->toArray()) == 'employer')
                                        <div class="font-medium text-teal-500">{{ implode(', ', $user->roles->pluck('name')->toArray()) }}</div>
                                    @elseif (implode(', ', $user->roles->pluck('name')->toArray()) == 'employee')
                                        <div class="font-medium text-sky-500">{{ implode(', ', $user->roles->pluck('name')->toArray()) }}</div>
                                    @endif

                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <div class="font-medium">Company Name : {{$user->company_name}}</div>
                                    <div class="font-medium">Company Register Number: {{$user->company_register_number}}</div>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <form action="{{route('user-registration-request.action', $user)}}" method="POST">
                                        @csrf
                                    <select name="verify_account">
                                        <option selected disabled>Select</option>
                                        <option value="1">verify</option>
                                        {{-- <option value="0">Hold</option> --}}
                                    </select>

                                    <button type="submit" class="text-center text-indigo-400 font-bold rounded p-2 focus:outline-none bg-opacity-40 border-2 border-indigo-400">
                                        Submit
                                    </button>
                                    </form>
                                </td>

                                <td class="p-2 whitespace-nowrap">
                                    <a href="{{route('user.delete', $user)}}" class="text-center text-red-400 font-bold rounded p-2 focus:outline-none bg-opacity-40 border-2 border-red-400">
                                        Delete
                                    </a>
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
