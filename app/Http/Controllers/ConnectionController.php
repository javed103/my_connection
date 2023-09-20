<?php

namespace App\Http\Controllers;
 use App\Models\Connection; // Import your Connection model

use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    //


public function index()
{
    $connections = Connection::all(); // Fetch all connections from the database

    return view('connections.index', compact('connections'));
}

}
