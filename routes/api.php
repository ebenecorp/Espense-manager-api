<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/expenses', 'ExpenseController@all')->name('expense.all');
// Route::post('/expenses', 'ExpenseController@store')->name('expense.store');

// Route::get('/expense/{expense}', 'ExpenseController@show')->name('expense.show');
// Route::put('expense/{expense}', 'ExpenseController@update')->name('expense.update');
// Route::delete('expense/{expense}', 'ExpenseController@destroy')->name('expense.destroy');

Route::resource('expense', ExpenseController::class)->shallow();