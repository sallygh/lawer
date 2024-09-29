<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LawsuitController;
use App\Http\Controllers\InvoiceController;


Route::get('/', function () {
    return view('home');
});

Route::resource('clients', ClientController::class);

Route::resource('lawsuits', LawsuitController::class);


Route::resource('invoices', InvoiceController::class);
