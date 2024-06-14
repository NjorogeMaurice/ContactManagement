<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Contact') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <h1 class="text-2xl mb-4">Edit Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                    value="{{ old('name', $contact->name) }}" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                    value="{{ old('email', $contact->email) }}" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                <input type="text" name="phone" id="phone" class="form-input rounded-md shadow-sm mt-1 block w-full"
                    value="{{ old('phone', $contact->phone) }}" required>
                @error('phone')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="group_id" class="block text-gray-700 text-sm font-bold mb-2">Group</label>
                <select name="group_id" id="group_id"
                    class="form-select rounded-md shadow-sm mt-1 block w-full @error('group_id') border-red-500 @enderror"
                    required>
                    @foreach($groups as $group)
                        <option value="{{ $group->id }}" {{ $contact->group_id == $group->id ? 'selected' : '' }}>
                            {{ $group->name }}</option>
                    @endforeach
                </select>
                @error('group_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                    Contact</button>
            </div>
        </form>
    </div>
</x-app-layout>
