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

use App\User;



Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    $user = User::find(1);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    /* Route::get('/profile', function() {
        return view('profile');
    })->name('profile'); */

    Route::resource('profile', ProfileController::class)->except(['index', 'show', 'create', 'store']);
    Route::get('profile/{username}', 'ProfileController@show')->name('profile.show');

});



