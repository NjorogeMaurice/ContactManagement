<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Group') }}
        </h2>
    </x-slot>
    <h1>{{ $group->name }}</h1>
    <a href="{{ route('groups.edit', $group->id) }}">Edit</a>
    <form action="{{ route('groups.destroy', $group->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-app-layout>
