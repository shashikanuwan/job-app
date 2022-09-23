<main class="flex flex-col justify-center bg-cyan-500 p-16">
    <h1 class="text-3xl font-bold text-white text-center">Create new job</h1>
    <p class="mb-8 font-semibold text-gray-100"></p>

    <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
            <!-- Session Status -->
           <x-auth-session-status class="mb-4" :status="session('status')" />

           <!-- Validation Errors -->
           <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="title" class="mb-2 font-semibold">Title <span class="text-red-500">*</span></label>
                    <x-text-input type="text" name="title" id="title"  :value="old('title')"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
                </div>
                <div class="flex flex-col">
                    <label for="expiry_date" class="mb-2 font-semibold">Expiry Date <span class="text-red-500">*</span></label>
                    <x-text-input type="date" id="expiry_date" name="expiry_date"  :value="old('expiry_date')"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
                </div>
            </div>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="minimum_salary" class="mb-2 font-semibold">Minimum Salary (LKR) <span class="text-red-500">*</span></label>
                    <x-text-input type="number" id="minimum_salary" name="minimum_salary"  :value="old('minimum_salary')"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
                </div>
                <div class="flex flex-col">
                    <label for="maximum_salary" class="mb-2 font-semibold">Maximum Salary (LKR) <span class="text-red-500">*</span></label>
                    <x-text-input type="number" id="maximum_salary" name="maximum_salary"  :value="old('maximum_salary')"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
                </div>
            </div>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="sub_category_id" class="mb-2 font-semibold">Category <span class="text-red-500">*</span></label>
                    <select name="sub_category_id" id="sub_category_id"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">
                        <option selected disabled>Select Category</option>
                        @forelse ($subCategories as $subCategory)
                            <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="district_id" class="mb-2 font-semibold">District <span class="text-red-500">*</span></label>
                    <select name="district_id" id="district_id"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">
                        <option selected disabled>Select District</option>
                        @forelse ($districts as $district)
                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="work_location_id" class="mb-2 font-semibold">Work Location <span class="text-red-500">*</span></label>
                    <select name="work_location_id" id="work_location_id"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">
                        <option selected disabled>Select Work Location</option>
                        @forelse ($workLocations as $workLocation)
                            <option value="{{ $workLocation->id }}">{{ $workLocation->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="employment_type_id" class="mb-2 font-semibold">Employment Types <span class="text-red-500">*</span></label>
                    <select name="employment_type_id" id="employment_type_id"
                        class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">
                        <option selected disabled>Select Employment Type</option>
                        @forelse ($employmentTypes as $employmentType)
                            <option value="{{ $employmentType->id }}">{{ $employmentType->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
            </div>

            <div class="mb-4 flex flex-col">
                <label for="description" class="mb-2 font-semibold">Description <span class="text-red-500">*</span></label>
                <div class="relative">
                    <textarea name="description" id="description" cols="30" rows="10" :value="old('description')"
                        class="w-full rounded-lg border border-slate-200 px-2 py-1 pl-8 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">{{old('description')}}</textarea>
                </div>
            </div>

            <div class="mb-4 grid grid-cols-6 gap-2 justify-center">
                <button type="submit" class="text-center text-indigo-400 font-bold rounded py-2 px-4 focus:outline-none bg-opacity-40 border-2 border-indigo-400">
                    Create
                </button>
            </div>
        </form>
    </div>
</main>
