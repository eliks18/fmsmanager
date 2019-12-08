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
    return view('home');
})->name('home');
Route::get('import', 'CountriesController@import');
Route::post('season/getNextSeason', 'AjaxController@getNextSeason');

route::resource('league', 'LeagueController');
route::resource('season', 'SeasonController');
route::resource('session', 'SessionController');
route::resource('battle', 'BattleController');
route::resource('freestyler', 'FreestylerController');
