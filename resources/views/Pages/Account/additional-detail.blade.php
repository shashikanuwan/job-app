<x-guest-layout>

    @role('employee')
        <x-employee-detail />
    @endrole

    @role('employer')
        <x-employer-detail />
    @endrole

</x-guest-layout>
