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

Route::get('/chees', [
    'uses' => 'PMPizzaCheesesController@showCreated'
    ]);

Route::post('/chees', [

    'as' => 'chees',
    'uses' => 'PMPizzaCheesesController@create'
    ]);

Route::get('/ingredients', [
    'uses' => 'PMPizzaIngredientsController@showCreated'
]);

Route::post('/ingredients', [

    'as' => 'ingredients',
    'uses' => 'PMPizzaIngredientsController@create'
]);

Route::get('/pads', [
    'uses' => 'PMPizzaPadsController@showCreated'
]);

Route::post('/pads', [

    'as' => 'pads',
    'uses' => 'PMPizzaPadsController@create'
]);