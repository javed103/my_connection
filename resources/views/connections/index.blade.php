@extends('layouts.app')

@section('content')
    <h1>All Connections</h1>

    <ul>
        @foreach ($connections as $connection)
            <li>{{ $connection->name }}</li>
        @endforeach
    </ul>
@endsection
