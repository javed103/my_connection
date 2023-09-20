<?php

use Livewire\Component;

class AllConnections extends Component
{
    public $search = '';

   public function render()
{
    $connections = SearchableConnection::search($this->search)->get();
    return view('livewire.all-connections', ['connections' => $connections]);
}




}
