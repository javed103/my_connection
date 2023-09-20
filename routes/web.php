<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectionController;
use App\Http\Livewire\MyConnections;
use App\Http\Livewire\AllConnections;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/connections', [ConnectionController::class, 'index'])->name('connections.index');

Route::get('/my-connections', function () {
    return view('my-connections');
})->name('my-connections');

Route::get('/all-connections', function () {
    return view('all-connections');
})->name('all-connections');
Route::get('/my-connections', 'MyConnectionsController@index')->name('my-connections');

