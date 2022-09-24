<div>
    <div class="bg-blue-100 border text-center border-blue-400 text-blue-700 p-3 rounded relative my-6  shadow" role="alert">
        <span class="block sm:inline"> Fill out the form below to your additional detail </span>
    </div>

    <div class="flex items-center justify-center pt-5 pb-5">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
            <div class="flex justify-center py-4">
                <a href="{{ route('welcome') }}" class="flex bg-purple-200 rounded py-1 px-4 border-2 border-purple-300">
                    Home
                </a>
            </div>

            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Fill out this form</h1>
                </div>
            </div>

            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form action="{{route('employee.detail.store')}}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class=" md:text-sm text-xs text-gray-500 text-light font-semibold">Date of Birth<span class="text-red-500">*</span></label>
                        <input name="dob" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" placeholder="DOB" required />
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
