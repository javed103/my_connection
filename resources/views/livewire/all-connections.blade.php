@extends('layouts.app')


    @section('content')
    <livewire:all-connections />
@endsection
<div x-data="{ search: '' }">
    <input x-model="search" type="text" placeholder="Search connections">

    <!-- Display search results here -->



<div x-data="{ search: '' }">
    <input x-model="search" type="text" placeholder="Search connections">

    <div>
        @foreach ($connections as $connection)
            <div>{{ $connection->name }}</div>
        @endforeach
    </div>
</div>
</div>
<div x-data="{ isOpen: false }">
    <button @click="isOpen = true">Add New Connection</button>

    <div x-show="isOpen" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-4 rounded-lg">
            <!-- Add connection form here -->
            <button @click="isOpen = false">Cancel</button>
        </div>
    </div>
</div>
