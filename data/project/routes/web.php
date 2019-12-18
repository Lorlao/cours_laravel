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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Quand l'utilisateur va aller sur l'URL /home, on va utiliser le Controller qui se nomme HomeController, et utiliser qui se nomme index.

    //READ
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/Movies', 'MovieController@showMovies') -> name('movies');

Route::group(['middleware' => ['auth']], function () {
    //CREATE
    Route::get('/create', 'MovieController@createMovie') -> name('create');
    Route::post('/storeMovie', 'MovieController@store') -> name('storeMovie');
    //erreur 419 ultiliser @csrf

    //UPDATE
    Route::post('/editMovie/{id}', 'MovieController@editMovie')-> name('editMovie');
    Route::post('/updateMovie/{id}', 'MovieController@update')->name('updateMovie');

    //DELETE
    Route::post('deleteMovie/{id}', 'MovieController@delete')->name('deleteMovie');
});
