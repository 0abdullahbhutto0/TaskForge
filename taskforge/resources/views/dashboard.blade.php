<x-sidebar>
    <x-layout>
        @if ($user->hasRole() === 'Admin')
            <h1 class="text-gray-800">Hello Admin</h1>
        @endif

        @if ($user->hasRole() === 'Manager')
            <h1 class="text-gray-800">Hello Manager</h1>
        @endif

        @if ($user->hasRole() === 'Unassigned')
            <h1 class="text-gray-800">Sit tight, We're approving your request.</h1>
        @endif

        @if ($user->hasRole() === 'Employee')
            <h1 class="text-gray-800">Hello Employee.</h1>
        @endif
    </x-layout>
</x-sidebar>
