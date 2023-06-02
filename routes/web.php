<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});


Route::group(['prefix' => 'admins'], function() {

    Route::get('/', [DashboardController::class, 'home'])->name('dash');
    Route::get('/blank', [DashboardController::class, 'blank'])->name('BlankPage');
    Route::get('/form', [DashboardController::class, 'form'])->name('FormPage');
    Route::get('/table', [DashboardController::class, 'table'])->name('TablePage');

    //clients register
    Route::get('/RegisterClient', [DashboardController::class, 'clientsregister'])->name('RegisterClientspage');


    //clients list
    Route::get('/ClientList', [DashboardController::class, 'clients_table'])->name('ClientsListpage');



    //billing
    Route::get('/BillingTab', [DashboardController::class, 'billing'])->name('billingListpage');



    //payment
    Route::get('/PaymentTab', [DashboardController::class, 'payment'])->name('paymentregistrationpage');
});