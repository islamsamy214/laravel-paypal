<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

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

Route::get('create-transaction', [CheckoutController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [CheckoutController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [CheckoutController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [CheckoutController::class, 'cancelTransaction'])->name('cancelTransaction');