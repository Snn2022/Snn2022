<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SourceController;

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
    return view('login');
})->name('main');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::post('dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('invoice-list',[InvoiceController::class,'index'])->name('invoices-list');

Route::get('invoice-header', function () {
    return view('templates.Invoice.set-header');
})->name('invoices-set-header');
Route::post('submit-invoice-header',[InvoiceController::class,'setHeader'])->name('submit-invoice-header');


Route::get('invoice-create', function () {
    return view('templates.Invoice.create');
})->name('invoice-create');


Route::get('room-list', function () {
    return view('templates.Rooms.index');
})->name('room-list');

Route::get('create-room', function () {
    return view('templates.Rooms.create');
})->name('create-room');
Route::post('submit-room-type',[RoomController::class,'createRoom'])->name('submit-room-type');

Route::get('source-list', function () {
    return view('templates.Source.index');
})->name('booking-source');

Route::get('create-source', function () {
    return view('templates.Source.create');
})->name('create-source');
Route::post('submit-source',[SourceController::class,'createSource'])->name('submit-source');


Route::get('income-list', function () {
    return view('templates.Source.Income.index');
})->name('income-source');

Route::get('create-income', function () {
    return view('templates.Source.Income.create');
})->name('create-income');
Route::post('submit-income-source',[SourceController::class,'createIncomeSource'])->name('submit-income-source');

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
