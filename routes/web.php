<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

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
    return view('main');
})->name('main');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('invoice-list', function () {
    return view('templates.Invoice.invoices');
})->name('invoices-list');
Route::get('room-list', function () {
    return view('templates.Rooms.rooms');
})->name('room-list');

Route::post('invoice-submit',[InvoiceController::class,'index'])->name('invoice-submit');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
