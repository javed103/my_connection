<?php

use Livewire\Component;
use App\Models\Connection; // Import your Connection model

class MyConnections extends Component
{
    public $connections;

    public function mount()
    {
        // Load the user's connections when the component is initialized
        $this->connections = auth()->user()->connections;
    }

    public function render()
    {

        $connections = SearchableConnection::search($this->search)->get();
    return view('livewire.my-connections', ['connections' => $connections]);
       // return view('livewire.my-connections');
    }
}
