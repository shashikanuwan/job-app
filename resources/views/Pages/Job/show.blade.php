<x-app-layout>
    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
        <div class="flex justify-start item-start space-y-2 flex-col">
            <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">
                {{ $job->subCategory->name }}
            </h1>
            <p class="text-base dark:text-gray-300 font-medium leading-6 text-gray-600">Published on:
                {{ $job->created_at->format('M d, Y') }}</p>
        </div>
        <div
            class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                <div
                    class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                    <p class="text-lg md:text-2xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800">
                        Job Details
                    </p>
                    <div
                        class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                        <div
                            class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                            <div class="w-full flex flex-col justify-start items-start space-y-8">
                                <div class="flex justify-start items-start flex-col space-y-2">
                                    <p class="text-sm dark:text-white leading-none text-gray-800">
                                        <span class="dark:text-gray-400 text-gray-300">Title: </span>
                                        {{$job->title}}
                                    </p>
                                    <p class="text-sm dark:text-white leading-none text-gray-800">
                                        <span class="dark:text-gray-400 text-gray-300">Main Category: </span>
                                        {{$job->subCategory->category->name}}
                                    </p>
                                    <p class="text-sm dark:text-white leading-none text-gray-800">
                                        <span class="dark:text-gray-400 text-gray-300">Sub Category: </span>
                                        {{$job->subCategory->name}}
                                        </p>
                                </div>
                            </div>

                            <div class="flex justify-between space-x-8 items-start w-full">
                                <div class="flex justify-start items-start flex-col space-y-2">
                                    <p class="text-sm dark:text-white leading-none text-gray-800">
                                        <span class="dark:text-gray-400 text-gray-300">Salary(LKR): </span>
                                        {{$job->minimum_salary}} - {{$job->maximum_salary}}
                                    </p>

                                    <p class="text-sm dark:text-white leading-none text-gray-800">
                                        <span class="dark:text-gray-400 text-gray-300">Work Location: </span>
                                        {{$job->workLocation->name}}
                                    </p>

                                    <p class="text-sm dark:text-white leading-none text-gray-800">
                                        <span class="dark:text-gray-400 text-gray-300">Employment Type: </span>
                                        {{$job->employmentType->name}}
                                    </p>

                                    <p class="text-sm dark:text-white leading-none text-gray-800">
                                        <span class="dark:text-gray-400 text-gray-300">Application deadline: </span>
                                        {{ $job->expiry_date->format('M d, Y') }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="flex justify-center md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                    <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Description</h3>
                        <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 pb-4">
                           <div class="flex justify-between items-center w-full">
                                <p class="text-base dark:text-white leading-4 text-gray-800">{{$job->description}}</p>
                            </div>
                        </div>
                    </div>

                    @guest
                    <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                        <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Apply for job after authenticate</h3>
                        <a href="{{route('login')}}" class="text-center hover:bg-black dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white">
                            Login
                        </a>
                    </div>
                    @endguest

                    @auth
                        @unlessrole('admin|employer')
                        <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">
                            <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Apply Now</h3>
                            <x-job-apply-form :job="$job"/>
                        </div>
                        @endunlessrole
                    @endauth

                </div>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
                <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Company Details</h3>
                <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex flex-col justify-start items-start flex-shrink-0">
                        <div class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-gray-200">
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="text-base dark:text-white font-semibold leading-4 text-left text-gray-800">
                                    {{ $job->employer->name }}
                                </p>

                                <p class="text-sm dark:text-gray-300 leading-5 text-gray-600">
                                    {{ $job->employer->company_name }}</p>
                            </div>
                        </div>

                        <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left border-b text-gray-800">
                            Contact
                        </p>

                        <div
                            class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 7L12 13L21 7" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="cursor-pointer text-sm leading-5 ">{{ $job->employer->email }}</p>
                        </div>

                        <div
                            class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 1030.000000 1280.000000"
                                preserveAspectRatio="xMidYMid meet">

                                <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000"
                                    stroke="none">
                                    <path d="M8646 12790 c-60 -16 -149 -67 -194 -113 -71 -72 -2120 -2778 -2157 -2848 -100 -191 -80 -414 53 -578 19 -24 247 -213 506 -421 488 -391 506 -408 555 -521 50 -114 66 -279 42 -430 -28 -171 -113 -399 -240 -644 -170 -327 -201 -370 -1122 -1576 l-874 -1147 -225 -237 c-442 -467 -720 -700 -955 -801 -87 -38 -93 -39 -205 -39 -123 0 -172 14 -246 70 -17 13 -201 233 -407 488 -206 255 -390 476 -408 492 -163 138 -410 119 -560 -41 -53 -57 -2097 -2749 -2136 -2813 -112 -186 -89 -448 55 -608 31 -35 842 -641 1021 -763 282 -192 781 -290 1278 -250 1399 114 2984 1146 4542 2960 1197 1393 2177 2928 2733 4280 351 853 541 1627 589 2400 49 785 -113 1575 -418 2037 -50 76 -821 973 -876 1019 -61 52 -150 86 -235 90 -42 2 -94 -1 -116 -6z" />
                                </g>
                            </svg>
                            <p class="cursor-pointer text-sm leading-5 ">{{ $job->employer->phone_number }}</p>
                        </div>

                    </div>
                    <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                        <div
                            class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                            <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                                <p class="text-base border-b dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">
                                    Location
                                </p>

                                <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">
                                    {{$job->district->province->name}}
                                </p>

                                <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">
                                    {{$job->district->name}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
