<x-app-layout>

    <x-search-job-form :selectedCategoryId="$selectedCategoryId" :selectedEmploymentTypeId="$selectedEmploymentTypeId" :selectedDistrictId="$selectedDistrictId" :selectedWorkLocationId="$selectedWorkLocationId" />

    <x-job-card :jobs="$jobs" />

</x-app-layout>
