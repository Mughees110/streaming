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
Route::get('signup', function () {
    return view('signup');
})->name('signup');
Route::get('signin', function () {
    return view('signin');
});
Route::get('/', function () {
    return view('welcome');
});
Route::post('store-signup','UserController@storeSignup');
Route::post('store-signin','UserController@storeSignin');
Route::middleware(['auth','web'])->group(function () {

Route::get('movies', function () {
    return view('movies');
})->middleware('auth');
Route::get('softwares', function () {
    return view('softwares');
});
Route::get('games', function () {
    return view('games');
});
Route::get('applications', function () {
    return view('applications');
});

Route::get('admin-panel', 'MovieController@adminPanel');
Route::get('create-movie', 'MovieController@createMovie');//
Route::get('create-season', 'MovieController@createSeason');//
Route::get('all-movie', 'MovieController@allMovie');//
Route::post('store-movie','MovieController@storeMovie');
Route::post('store-season','MovieController@storeSeason');
Route::get('edit-movie/{id}','MovieController@editMovie');
Route::post('update-movie/{id}','MovieController@updateMovie');
Route::get('delete-movie/{id}','MovieController@deleteMovie');
Route::get('view-movie/{id}','MovieController@viewMovie');
Route::get('download-movie/{id}','MovieController@downloadMovie');

Route::get('create-application', 'ApplicationController@createApplication');//
Route::get('all-application', 'ApplicationController@allApplication');//
Route::post('store-application','ApplicationController@storeApplication');
Route::get('edit-application/{id}','ApplicationController@editApplication');
Route::post('update-application/{id}','ApplicationController@updateApplication');
Route::get('delete-application/{id}','ApplicationController@deleteApplication');
Route::get('view-application/{id}','ApplicationController@viewApplication');
Route::get('download-application/{id}','ApplicationController@downloadApplication');

Route::get('create-software', 'SoftwareController@createSoftware');//
Route::get('all-software', 'SoftwareController@allSoftware');//
Route::post('store-software','SoftwareController@storeSoftware');
Route::get('edit-software/{id}','SoftwareController@editSoftware');
Route::post('update-software/{id}','SoftwareController@updateSoftware');
Route::get('delete-software/{id}','SoftwareController@deleteSoftware');
Route::get('view-software/{id}','SoftwareController@viewSoftware');
Route::get('download-software/{id}','SoftwareController@downloadSoftware');

Route::get('create-game', 'GameController@createGame');//
Route::get('all-game', 'GameController@allGame');//
Route::post('store-game','GameController@storeGame');
Route::get('edit-game/{id}','GameController@editGame');
Route::post('update-game/{id}','GameController@updateGame');
Route::get('delete-game/{id}','GameController@deleteGame');
Route::get('view-game/{id}','GameController@viewGame');
Route::get('download-game/{id}','GameController@downloadGame');

Route::get('sort-movie/{by}','MovieController@sortMovie');
Route::get('sort-software/{by}','SoftwareController@sortSoftware');
Route::get('sort-application/{by}','ApplicationController@sortApplication');
Route::get('sort-game/{by}','GameController@sortGame');

Route::post('search-movie','MovieController@searchMovie');
Route::post('search-software','SoftwareController@searchSoftware');
Route::post('search-application','ApplicationController@searchApplication');
Route::post('search-game','GameController@searchGame');



Route::get('logout','UserController@logout');
Route::get('all-user','MovieController@allUser');
Route::get('delete-user/{id}','MovieController@deleteUser');
});

