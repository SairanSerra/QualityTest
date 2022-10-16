<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('client');

});

Route::get('/client', [ClientController::class, 'ShowClient'])->name('client');
Route::get('/details', [ClientController::class, 'ShowDetailsClient'])->name('details');
Route::get('/create/client', [ClientController::class, 'showFormCreateClient'])->name('show.form.client');
