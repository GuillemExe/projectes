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
    return view('master.master');
});

// TOKEN RETURN - OPTIONAL
Route::get('/token', 'ProjecteController@tokenReturn')->name('projectes.token');


// PROJECTE
// INDEX
Route::get('/projectes', 'ProjecteController@index')->name('projectes.index');
// CREATE
Route::get('/projectes/create', 'ProjecteController@create')->name('projectes.create');
// STORE
Route::post('/projectes', 'ProjecteController@store')->name('projectes.store');
// SHOW
Route::get('/projectes/{projecte}', 'ProjecteController@show')->name('projectes.show');
// EDIT
Route::get('/projectes/{projecte}/edit', 'ProjecteController@edit')->name('projectes.edit');
// UPDATE
Route::match(['put','patch'], '/projectes/{projecte}', 'ProjecteController@update')->name('projectes.update');
// DESTROY
Route::delete('/projectes/{projecte}', 'ProjecteController@destroy')->name('projectes.destroy');


// PROJECTE - TASCA
// INDEX
Route::get('/projectes/{projecte}/tasques', 'TascaController@index')->name('projectes.tasques.index');
// CREATE
Route::get('/projectes/{projecte}/tasques/create', 'TascaController@create')->name('projectes.tasques.create');
// STORE
Route::post('/projectes/{projecte}/tasques', 'TascaController@store')->name('projectes.tasques.store');
// SHOW
Route::get('/projectes/{projecte}/tasques/{tasque}', 'TascaController@show')->name('projectes.tasques.show');
// EDIT
Route::get('/projectes/{projecte}/tasques/{tasque}/edit', 'TascaController@edit')->name('projectes.tasques.edit');
// UPDATE
Route::match(['put','patch'], '/projectes/{projecte}/tasques/{tasque}', 'TascaController@update')->name('projectes.tasques.update');
// DESTROY
Route::delete('/projectes/{projecte}/tasques/{tasque}', 'TascaController@destroy')->name('projectes.tasques.destroy');