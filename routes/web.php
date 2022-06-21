<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCrudController;

Route::resource('companies', CompanyCrudController::class);


Route::get('/', function () {
    return view('welcome');
});
