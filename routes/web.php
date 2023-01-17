<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SpecificationController;
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

Route::get('/home', function () {
    return view('index');
})->name('index');

Route::get('/', function () {
    return view('login');
})->name('logout');

Auth::routes();

Route::get('/clientregister', function () {
    return view('registerclient');
})->middleware('auth')->name('registerclient');

// for Client Operations
Route::resource('client', ClientController::class);
Route::resource('Specification', SpecificationController::class);

Route::get('/se', function () {
    return view('serviceproviderprofile');
});

// for Kareem
// for first route search you will need to show the output
Route::get('/searchclientuser', function () {
    return view('searchclientuser');
});
Route::get('/resultsearchuser', function () {
    return view('resultsearchuser');
});
Route::get('/searchclientdash', function () {
    return view('searchclientdashboard');
});
// also Mahmoud use this route to make chat i will send database for u and you can add what you want ..