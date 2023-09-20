<!-- resources/views/my-connections-empty.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <div class="flex justify-center items-center h-full">
        <div class="text-center">
            <p class="text-lg font-semibold mb-4">You haven't added any connections yet.</p>
            <p class="text-gray-500">To get started, click the "Add New Connection" button above.</p>
        </div>
    </div>
@endsection
