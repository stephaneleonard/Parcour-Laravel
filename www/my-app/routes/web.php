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

// Display all the articles
Route::get('/restaurants', 'RestaurantController@index');
// Show the form in order to create an article
Route::get('/restaurant/create','RestaurantController@create');

// Show the form in order to create an article
Route::get('/restaurant/show/{id}','RestaurantController@show');
// Post/public the article
Route::post('/restaurant/create','RestaurantController@store');
// Show the form of an article
Route::get('/restaurant/edit/{id}','RestaurantController@edit')->name('restaurant.edit');
// Update this specific article
Route::patch('/restaurant/edit/{id}','RestaurantController@update');
// Delete a specific article
Route::delete('/restaurant/{id}',function($id){
});
