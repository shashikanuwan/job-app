<div class="flex flex-col items-start justify-between w-full px-10 pt-5 pb-20 lg:pt-20 lg:flex-row">
    <div class="relative z-10 w-full mt-20 lg:mt-0">
        <div class="relative z-10 flex flex-col items-start justify-start p-10 bg-white shadow-2xl rounded-xl">
            <h4 class="w-full text-4xl font-medium leading-snug">Search Form</h4>
            <form action="{{ route('search.job') }}" method="GET" class="relative w-full mt-6 space-y-8">
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 mt-4">
                    <div>
                        <x-input-label for="">Category</x-label>
                            <select id="subCategory" name="subCategory"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Select Category</option>
                                @foreach ($subCategories as $subCategory)
                                    <option value="{{ $subCategory->id }}"
                                        @if ($subCategory->id == $selectedCategoryId) selected @endif>
                                        {{ $subCategory->name }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div>
                        <x-input-label for="">Employment Type</x-label>
                            <select id="employmentType" name="employmentType"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Select Employment Type</option>
                                @foreach ($employmentTypes as $employmentType)
                                    <option value="{{ $employmentType->id }}"
                                        @if ($employmentType->id == $selectedEmploymentTypeId) selected @endif>{{ $employmentType->name }}
                                    </option>
                                @endforeach
                            </select>
                    </div>

                    <div>
                        <x-input-label for="">Work Location</x-label>
                            <select id="work_location" name="work_location"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Work Location</option>
                                @foreach ($workLocations as $workLocation)
                                    <option value="{{ $workLocation->id }}" @if ($workLocation->id == $selectedWorkLocationId) selected @endif>{{ $workLocation->name }}
                                    </option>
                                @endforeach
                            </select>
                    </div>

                    <div>
                        <x-input-label for="">District</x-label>
                            <select id="district" name="district"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Select District</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" @if ($district->id == $selectedDistrictId) selected @endif>{{ $district->name }}
                                    </option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="justify-center mt-6">
                    <x-primary-button class="ml-3 mt-5">
                        {{ __('Filter') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        <svg class="absolute top-0 left-0 z-0 w-32 h-32 -mt-12 -ml-12 text-gray-200 fill-current" viewBox="0 0 91 91"
            xmlns="http://www.w3.org/2000/svg">
            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                <g fill-rule="nonzero">
                    <g>
                        <g>
                            <circle cx="3.261" cy="3.445" r="2.72"></circle>
                            <circle cx="15.296" cy="3.445" r="2.719"></circle>
                            <circle cx="27.333" cy="3.445" r="2.72"></circle>
                            <circle cx="39.369" cy="3.445" r="2.72"></circle>
                            <circle cx="51.405" cy="3.445" r="2.72"></circle>
                            <circle cx="63.441" cy="3.445" r="2.72"></circle>
                            <circle cx="75.479" cy="3.445" r="2.72"></circle>
                            <circle cx="87.514" cy="3.445" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 12)">
                            <circle cx="3.261" cy="3.525" r="2.72"></circle>
                            <circle cx="15.296" cy="3.525" r="2.719"></circle>
                            <circle cx="27.333" cy="3.525" r="2.72"></circle>
                            <circle cx="39.369" cy="3.525" r="2.72"></circle>
                            <circle cx="51.405" cy="3.525" r="2.72"></circle>
                            <circle cx="63.441" cy="3.525" r="2.72"></circle>
                            <circle cx="75.479" cy="3.525" r="2.72"></circle>
                            <circle cx="87.514" cy="3.525" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 24)">
                            <circle cx="3.261" cy="3.605" r="2.72"></circle>
                            <circle cx="15.296" cy="3.605" r="2.719"></circle>
                            <circle cx="27.333" cy="3.605" r="2.72"></circle>
                            <circle cx="39.369" cy="3.605" r="2.72"></circle>
                            <circle cx="51.405" cy="3.605" r="2.72"></circle>
                            <circle cx="63.441" cy="3.605" r="2.72"></circle>
                            <circle cx="75.479" cy="3.605" r="2.72"></circle>
                            <circle cx="87.514" cy="3.605" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 36)">
                            <circle cx="3.261" cy="3.686" r="2.72"></circle>
                            <circle cx="15.296" cy="3.686" r="2.719"></circle>
                            <circle cx="27.333" cy="3.686" r="2.72"></circle>
                            <circle cx="39.369" cy="3.686" r="2.72"></circle>
                            <circle cx="51.405" cy="3.686" r="2.72"></circle>
                            <circle cx="63.441" cy="3.686" r="2.72"></circle>
                            <circle cx="75.479" cy="3.686" r="2.72"></circle>
                            <circle cx="87.514" cy="3.686" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 49)">
                            <circle cx="3.261" cy="2.767" r="2.72"></circle>
                            <circle cx="15.296" cy="2.767" r="2.719"></circle>
                            <circle cx="27.333" cy="2.767" r="2.72"></circle>
                            <circle cx="39.369" cy="2.767" r="2.72"></circle>
                            <circle cx="51.405" cy="2.767" r="2.72"></circle>
                            <circle cx="63.441" cy="2.767" r="2.72"></circle>
                            <circle cx="75.479" cy="2.767" r="2.72"></circle>
                            <circle cx="87.514" cy="2.767" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 61)">
                            <circle cx="3.261" cy="2.846" r="2.72"></circle>
                            <circle cx="15.296" cy="2.846" r="2.719"></circle>
                            <circle cx="27.333" cy="2.846" r="2.72"></circle>
                            <circle cx="39.369" cy="2.846" r="2.72"></circle>
                            <circle cx="51.405" cy="2.846" r="2.72"></circle>
                            <circle cx="63.441" cy="2.846" r="2.72"></circle>
                            <circle cx="75.479" cy="2.846" r="2.72"></circle>
                            <circle cx="87.514" cy="2.846" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 73)">
                            <circle cx="3.261" cy="2.926" r="2.72"></circle>
                            <circle cx="15.296" cy="2.926" r="2.719"></circle>
                            <circle cx="27.333" cy="2.926" r="2.72"></circle>
                            <circle cx="39.369" cy="2.926" r="2.72"></circle>
                            <circle cx="51.405" cy="2.926" r="2.72"></circle>
                            <circle cx="63.441" cy="2.926" r="2.72"></circle>
                            <circle cx="75.479" cy="2.926" r="2.72"></circle>
                            <circle cx="87.514" cy="2.926" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 85)">
                            <circle cx="3.261" cy="3.006" r="2.72"></circle>
                            <circle cx="15.296" cy="3.006" r="2.719"></circle>
                            <circle cx="27.333" cy="3.006" r="2.72"></circle>
                            <circle cx="39.369" cy="3.006" r="2.72"></circle>
                            <circle cx="51.405" cy="3.006" r="2.72"></circle>
                            <circle cx="63.441" cy="3.006" r="2.72"></circle>
                            <circle cx="75.479" cy="3.006" r="2.72"></circle>
                            <circle cx="87.514" cy="3.006" r="2.719"></circle>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        <svg class="absolute bottom-0 right-0 z-0 w-32 h-32 -mb-12 -mr-12 text-blue-600 fill-current"
            viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg">
            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                <g fill-rule="nonzero">
                    <g>
                        <g>
                            <circle cx="3.261" cy="3.445" r="2.72"></circle>
                            <circle cx="15.296" cy="3.445" r="2.719"></circle>
                            <circle cx="27.333" cy="3.445" r="2.72"></circle>
                            <circle cx="39.369" cy="3.445" r="2.72"></circle>
                            <circle cx="51.405" cy="3.445" r="2.72"></circle>
                            <circle cx="63.441" cy="3.445" r="2.72"></circle>
                            <circle cx="75.479" cy="3.445" r="2.72"></circle>
                            <circle cx="87.514" cy="3.445" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 12)">
                            <circle cx="3.261" cy="3.525" r="2.72"></circle>
                            <circle cx="15.296" cy="3.525" r="2.719"></circle>
                            <circle cx="27.333" cy="3.525" r="2.72"></circle>
                            <circle cx="39.369" cy="3.525" r="2.72"></circle>
                            <circle cx="51.405" cy="3.525" r="2.72"></circle>
                            <circle cx="63.441" cy="3.525" r="2.72"></circle>
                            <circle cx="75.479" cy="3.525" r="2.72"></circle>
                            <circle cx="87.514" cy="3.525" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 24)">
                            <circle cx="3.261" cy="3.605" r="2.72"></circle>
                            <circle cx="15.296" cy="3.605" r="2.719"></circle>
                            <circle cx="27.333" cy="3.605" r="2.72"></circle>
                            <circle cx="39.369" cy="3.605" r="2.72"></circle>
                            <circle cx="51.405" cy="3.605" r="2.72"></circle>
                            <circle cx="63.441" cy="3.605" r="2.72"></circle>
                            <circle cx="75.479" cy="3.605" r="2.72"></circle>
                            <circle cx="87.514" cy="3.605" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 36)">
                            <circle cx="3.261" cy="3.686" r="2.72"></circle>
                            <circle cx="15.296" cy="3.686" r="2.719"></circle>
                            <circle cx="27.333" cy="3.686" r="2.72"></circle>
                            <circle cx="39.369" cy="3.686" r="2.72"></circle>
                            <circle cx="51.405" cy="3.686" r="2.72"></circle>
                            <circle cx="63.441" cy="3.686" r="2.72"></circle>
                            <circle cx="75.479" cy="3.686" r="2.72"></circle>
                            <circle cx="87.514" cy="3.686" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 49)">
                            <circle cx="3.261" cy="2.767" r="2.72"></circle>
                            <circle cx="15.296" cy="2.767" r="2.719"></circle>
                            <circle cx="27.333" cy="2.767" r="2.72"></circle>
                            <circle cx="39.369" cy="2.767" r="2.72"></circle>
                            <circle cx="51.405" cy="2.767" r="2.72"></circle>
                            <circle cx="63.441" cy="2.767" r="2.72"></circle>
                            <circle cx="75.479" cy="2.767" r="2.72"></circle>
                            <circle cx="87.514" cy="2.767" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 61)">
                            <circle cx="3.261" cy="2.846" r="2.72"></circle>
                            <circle cx="15.296" cy="2.846" r="2.719"></circle>
                            <circle cx="27.333" cy="2.846" r="2.72"></circle>
                            <circle cx="39.369" cy="2.846" r="2.72"></circle>
                            <circle cx="51.405" cy="2.846" r="2.72"></circle>
                            <circle cx="63.441" cy="2.846" r="2.72"></circle>
                            <circle cx="75.479" cy="2.846" r="2.72"></circle>
                            <circle cx="87.514" cy="2.846" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 73)">
                            <circle cx="3.261" cy="2.926" r="2.72"></circle>
                            <circle cx="15.296" cy="2.926" r="2.719"></circle>
                            <circle cx="27.333" cy="2.926" r="2.72"></circle>
                            <circle cx="39.369" cy="2.926" r="2.72"></circle>
                            <circle cx="51.405" cy="2.926" r="2.72"></circle>
                            <circle cx="63.441" cy="2.926" r="2.72"></circle>
                            <circle cx="75.479" cy="2.926" r="2.72"></circle>
                            <circle cx="87.514" cy="2.926" r="2.719"></circle>
                        </g>
                        <g transform="translate(0 85)">
                            <circle cx="3.261" cy="3.006" r="2.72"></circle>
                            <circle cx="15.296" cy="3.006" r="2.719"></circle>
                            <circle cx="27.333" cy="3.006" r="2.72"></circle>
                            <circle cx="39.369" cy="3.006" r="2.72"></circle>
                            <circle cx="51.405" cy="3.006" r="2.72"></circle>
                            <circle cx="63.441" cy="3.006" r="2.72"></circle>
                            <circle cx="75.479" cy="3.006" r="2.72"></circle>
                            <circle cx="87.514" cy="3.006" r="2.719"></circle>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>
