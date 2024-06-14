<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a href="{{ route('contacts.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create
                        New Contact</a>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white shadow-md border-collapse">
                            <thead>
                                <tr class="bg-gray-800 text-white">
                                    <th class="py-2 px-3 border-b border-gray-300">Name</th>
                                    <th class="py-2 px-3 border-b border-gray-300">Email</th>
                                    <th class="py-2 px-3 border-b border-gray-300">Phone</th>
                                    <th class="py-2 px-3 border-b border-gray-300">Group</th>
                                    <th class="py-2 px-3 border-b border-gray-300">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $contact)
                                    <tr class="hover:bg-gray-100">
                                        <td class="py-3 px-3 border-b border-gray-300">{{ $contact->name }}</td>
                                        <td class="py-3 px-3 border-b border-gray-300">{{ $contact->email }}</td>
                                        <td class="py-3 px-3 border-b border-gray-300">{{ $contact->phone }}</td>
                                        <td class="py-3 px-3 border-b border-gray-300">{{ $contact->group->name }}</td>
                                        <td class="py-3 px-3 border-b border-gray-300">
                                            <a href="{{ route('contacts.edit', $contact->id) }}"
                                                class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                                            <form action="{{ route('contacts.destroy', $contact->id) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-700">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-3 px-3 border-b border-gray-300 text-center">No
                                            contacts found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     
    <script>
        function deleteContact(url) {
            if (confirm('Are you sure you want to delete this contact?')) {
                fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload(); // Reload the page after successful delete
                    } else {
                        throw new Error('Something went wrong');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to delete contact');
                });
            }
        }
    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
