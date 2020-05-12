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
Route::get('/projectes/{projecte}', ['as' => 'projectes.show', 'uses' => 'ProjecteController@show', function ($projecte) {
    //
}]);
// EDIT
Route::get('/projectes/{projecte}/edit', ['as' => 'projectes.edit', 'uses' => 'ProjecteController@edit', function ($projecte) {
    //
}]);
// UPDATE
Route::match(['put','patch'], '/projectes/{projecte}', 'ProjecteController@update')->name('projectes.update');
// DESTROY
Route::delete('/projectes/{projecte}', 'ProjecteController@destroy')->name('projectes.destroy');


// PROJECTE - TASCA
// INDEX
Route::get('/projectes/{projecte}/tasques', 'TascaController@index')->name('projectes.tasques.index');
// CREATE
Route::get('/projectes/{projecte}/tasques/create', ['as' => 'projectes.tasques.create', 'uses' => 'TascaController@create', function ($projecte) {
    //
}]);
// STORE
Route::post('/projectes/{projecte}/tasques', ['as' => 'projectes.tasques.store', 'uses' => 'TascaController@store', function ($id) {
    //
}]);
// SHOW
Route::get('/projectes/{projecte}/tasques/{tasca}', ['as' => 'projectes.tasques.show', 'uses' => 'TascaController@show', function ($projecte, $tasca) {
    //
}]);
// EDIT
Route::get('/projectes/{projecte}/tasques/{tasca}/edit', ['as' => 'projectes.tasques.edit', 'uses' => 'TascaController@edit', function ($projecte, $tasca) {
    //
}]);
// UPDATE
Route::match(['put','patch'], '/projectes/{projecte}/tasques/{tasca}', ['as' => 'projectes.tasques.update', 'uses' => 'TascaController@update', function ($projecte, $valores, $tasca) {
    //
}]);


// DESTROY
Route::delete('/projectes/{projecte}/tasques/{tasca}', 'TascaController@destroy')->name('projectes.tasques.destroy');