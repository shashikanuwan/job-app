
 <!-- Session Status -->
 <x-auth-session-status class="mb-4" :status="session('status')" />

 <!-- Validation Errors -->
 <x-auth-validation-errors class="mb-4" :errors="$errors" />

 <form action="{{route('job.apply')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="job_id"  value="{{$job->id}}">
    <div class="flex flex-col space-y-5">
        <label for="password">
            <p class="font-medium text-slate-700 pb-2">Upload Your CV (.pdf)</p>
            <input id="cv" name="cv" type="file" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder="Enter your password">
        </label>

        <label for="password">
            <p class="font-medium text-slate-700 pb-2">Are You Currently Working?</p>
            <input type="radio" name="working_status" id="working" value="Yes"> Yes
            <input type="radio" name="working_status" id="working" value="No"> No
        </label>

        <div class="w-full flex justify-center items-center">
            <button type="submit" class="hover:bg-black dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white">
                Submit
            </button>
        </div>
    </div>
</form>


