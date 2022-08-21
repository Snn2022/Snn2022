<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\CollectionController;
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

Route::get('register', function () {
    return view('register');
})->name('register');

Route::post('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('user-list',[UserController::class,'index'])->name('user-list');
Route::get('user-profile',[UserController::class,'getProfile'])->name('user-profile');

//invoice start
Route::get('invoice-list',[InvoiceController::class,'index'])->name('invoices-list');
Route::get('invoice-view',[InvoiceController::class,'view'])->name('invoices-view');

Route::get('pdf',[InvoiceController::class,'pdf'])->name('pdf');

Route::get('invoice-header', function () {
    return view('templates.Invoice.set-header');
})->name('invoices-set-header');
Route::post('submit-invoice-header',[InvoiceController::class,'setHeader'])->name('submit-invoice-header');


//Route::get('invoice-create',[CollectionController::class,'index'])->name('invoice-create');
Route::get('new-invoice',[InvoiceController::class,'create'])->name('new-invoice');
Route::post('new-invoice',[InvoiceController::class,'invoiceCreate'])->name('invoice-create');
Route::get('invoice-step2',[InvoiceController::class,'invoiceStep2'])->name('invoice-step2');

Route::get('fetch-rooms',[CollectionController::class,'fetchRooms']);

Route::get('test',[CollectionController::class,'test'])->name('test');

//rooms start
Route::get('room-list',[RoomController::class,'index'])->name('room-list');
Route::get('create-room', function () {
    return view('templates.Rooms.create');
})->name('create-room');
Route::post('submit-room-type',[RoomController::class,'createRoom'])->name('submit-room-type');

//booking ource start
Route::get('source-list',[SourceController::class,'index'])->name('booking-source');
Route::get('create-source', function () {
    return view('templates.Source.create');
})->name('create-source');
Route::post('submit-source',[SourceController::class,'createSource'])->name('submit-source');

//income source start
Route::get('income-list',[SourceController::class,'incomeIndex'])->name('income-source');
Route::get('create-income', function () {
    return view('templates.Source.Income.create');
})->name('create-income');
Route::post('submit-income-source',[SourceController::class,'createIncomeSource'])->name('submit-income-source');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});