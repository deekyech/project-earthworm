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
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    if(Auth::check())
    {
        return redirect(route('dashboard'));
    }
    return redirect('/earthworm');
});


Route::get('/earthworm', 'HomeController@landingPage')->name('landingPage');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    $user = User::find(1);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('profile', ProfileController::class)->except(['index', 'show', 'create', 'store']);
    Route::get('profile/{username}', 'ProfileController@show')->name('profile.show');

    Route::resource('addresses', AddressesController::class)->except(['show']);
    Route::get('addresses/make_primary_address/{address_id}', 'AddressesController@makePrimaryAddress');
    Route::resource('fundraiser', FundraiserLedgersController::class);
    Route::get('fundraiser/croptype/{crop_id}', 'CropTypesController@getCropTypes');
    Route::resource('expense', ExpenseLedgerController::class)->except(['show']);
    Route::put('expenseadmin/{expense}', 'ExpenseLedgerController@adminUpdate')->name('expense.adminUpdate');
    Route::resource('crop-categories', CropsController::class, ["names" => "crops"]);
    Route::resource('crops', CropTypesController::class, ["names" => "croptypes"]);
    Route::resource('fundraiser.credit', CreditLedgerController::class)->except(['index', 'update', 'edit', 'destroy', 'show']);
    Route::get('investorportfolio', 'CreditLedgerController@index')->name('investorportfolio');
});



