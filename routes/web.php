<?php

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

//Language
Route::get('locale/{code}', function ($code) {
    session(['locale' => $code]);
    return back();
})->name('locale');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


// Admin Group
Route::name('admin.')->namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('users', 'UserController');
});

// Client Group
Route::resource('photos', 'PhotoController');