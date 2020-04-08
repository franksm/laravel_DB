<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('getInterest/', function(){
	return App\People::find(1)->interest;     
});

Route::get('getPeople/', function(){
    return App\Interest::find(1)->people;
});

Route::resource('people','PeopleController');
Route::resource('interest','InterestController');
