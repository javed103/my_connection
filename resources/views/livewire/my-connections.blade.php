<!-- resources/views/livewire/my-connections.blade.php -->

<div>
    <h1 class="text-2xl font-bold mb-4">My Connections</h1>

    @if($connections->isEmpty())
        <p>No connections have been added yet.</p>
    @else
        <div class="grid grid-cols-2 gap-4">
            @foreach($connections as $connection)
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <h2 class="text-lg font-semibold">{{ $connection->name }}</h2>
                    <p>Unique Connection Name: {{ $connection->unique_name }}</p>
                    <p>Date Added: {{ $connection->created_at->format('Y-m-d H:i:s') }}</p>
                    <p>Usage: {{ $connection->usage }}/{{ $connection->total_usage }} API</p>
                    <p>Calls in the Last 24 Hours: {{ $connection->calls_in_last_24_hours }} API</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
