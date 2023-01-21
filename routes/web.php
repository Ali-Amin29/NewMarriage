<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchDashController;
use App\Http\Controllers\SpecificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceProviderSearchController;

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


// search about service provider

Route::get('/search', [App\Http\Controllers\ServiceProviderSearchController::class, 'index']);
Route::get('/filter', [App\Http\Controllers\ServiceProviderSearchController::class, 'search'])->name('advance_search');

// end search about service provider



// for Kareem
// for first route search you will need to show the output

Route::get('searchclientuser', [SearchController::class, 'searchClients'])->name('searchClients');
Route::post('resultsearchuser', [SearchController::class, 'resultClients'])->name('resultClients');

// Route::get('/searchclientuser', function () {
//     return view('searchclientuser');
// });

// Route::get('/resultsearchuser', function () {
//     return view('resultsearchuser');
// });

Route::get('searchclientdash', [SearchDashController::class, 'searchClientsDash'])->name('searchClientsDash');
Route::post('resultclientdash', [SearchDashController::class, 'resultClientsDash'])->name('resultClientsDash');
// Route::post('resultclientdash', [SearchDashController::class, 'resultClientsDash'])->name('resultClients');

// Route::get('/searchclientdash', function () {
//    return view('searchclientdashboard');
//});
// also Mahmoud use this route to make chat i will send database for u and you can add what you want ..
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
<<<<<<< HEAD




Route::get('aliamin', function () {
    $data = [
        "api_id" => "API43404236",
        "api_password" => "password@123",
        "brand" => "Ali",
        "phonenumber" => 01124105214,
        "sender_id" => 11,
    ];

    return $data;
});
=======
>>>>>>> b73d406d9897b0fa6e33f6a8151f220d6a863d04
