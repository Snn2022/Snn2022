<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ProfileController;

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

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('add-member', function () {
    return view('templates.Users.index');
})->name('add-member');

Route::post('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('setting',[ProfileController::class,'index'])->name('setting');
Route::get('user-list',[UserController::class,'index'])->name('user-list');

//members
Route::get('members',[MembersController::class,'index'])->name('members');
Route::get('add-member',[MembersController::class,'memberCreate'])->name('createMember');
Route::post('create-member',[MembersController::class,'memberStore'])->name('submitNewMember');
Route::get('members-profile/{id}',[MembersController::class,'memberProfile'])->name('membersDetails');

//Loan
Route::get('loan-list',[LoanController::class,'index'])->name('loanList');
Route::get('add-loan',[LoanController::class,'loanCreate'])->name('createLoan');
Route::post('submit-loan',[LoanController::class,'loanSubmit'])->name('submitLoan');

//collection
Route::get('collection',[TransactionController::class,'index'])->name('collection');
Route::post('search-collection',[TransactionController::class,'search'])->name('collectionSearch');
Route::post('collection-submit',[TransactionController::class,'transaction'])->name('submitTransaction');
//Msc. income
Route::get('msc-income',[TransactionController::class,'mscIncome'])->name('mscIncome');
Route::post('msc-income-submit',[TransactionController::class,'mscIncomeSubmit'])->name('submitMscIncome');
//salary
Route::get('salary',[TransactionController::class,'salary'])->name('salary');
Route::post('submit-salary',[TransactionController::class,'submitSalary'])->name('submitSalary');
//reports
Route::get('report-collection',[ReportsController::class,'index'])->name('collectionReport');
Route::post('report-collection-search',[ReportsController::class,'searchCollection'])->name('searchCollectionReport');
Route::get('report-salary',[ReportsController::class,'salaryReport'])->name('salaryReport');
Route::get('report-statement',[ReportsController::class,'statementReport'])->name('statementReport');

//package
Route::get('package',[PackageController::class,'index'])->name('package');
Route::post('submit-participant',[PackageController::class,'submitParticipant'])->name('submit-participant');
Route::get('package-edit/{id}',[PackageController::class,'packageEdit'])->name('package-edit');
Route::get('fetch-package',[PackageController::class,'fetchPackage'])->name('fetch-package');
Route::get('package-delete/{id}',[PackageController::class,'packageDelete'])->name('package-delete');

//payment start
Route::get('payment',[PaymentController::class,'index'])->name('payment');
Route::get('payment-checkout',[PaymentController::class,'paymentCheckout'])->name('payment-checkout');
Route::post('payment-confirm',[PaymentController::class,'paymentConfirm'])->name('payment-confirm');
Route::get('payment-list',[PaymentController::class,'paymentList'])->name('payment-list');
Route::get('payment-details/{id}',[PaymentController::class,'paymentDetails'])->name('payment-details');


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

//tshirt start
Route::get('tshirt-list',[TshirtController::class,'index'])->name('tshirt-list');
Route::post('tshirt-submit',[TshirtController::class,'store'])->name('tshirt-submit');
Route::get('tshirt-edit/{id}',[TshirtController::class,'edit'])->name('tshirt-edit');
Route::get('fetch-tshirts',[TshirtController::class,'fetchTshirts']);
Route::get('fetch-tshirts/{id}',[TshirtController::class,'fetchTshirtsData']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});