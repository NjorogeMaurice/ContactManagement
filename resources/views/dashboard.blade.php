<!-- resources/views/dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard1') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Contact Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Contacts</h3>
                    <p>Total Contacts: <span class="font-bold">{{ $totalContacts }}</span></p>

                    <div class="mt-4">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">View All Contacts</button>
                    </div>
                </div>
            </div>

            <!-- Groups Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Groups</h3>
                    <p>Total Groups: <span class="font-bold">{{ $totalGroups }}</span></p>
                    <div class="mt-4">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded">View All Groups</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
