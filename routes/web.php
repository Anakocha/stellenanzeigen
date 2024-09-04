<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\JobController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('jobs', [\App\Http\Controllers\JobController::class, "index"]);
Route::post('jobs', [\App\Http\Controllers\JobController::class, "store"]);
Route::get('jobs/create', [\App\Http\Controllers\JobController::class, "create"]);

Route::resources([
    'categories' => CategoryController::class,
    'companies' => CompanyController::class,
    //'others' => OtherController::class,
]);

