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

// Route::get('/', welcome
// Route::get('/', ['uses' => 'monControleur@store', 'as' => 'home']);

Route::get('/', 'BoissonController@index')->name('home');


Route::post('/', 'monControleur@list')->name('requete');

Route::get('/boisson/{id}', 'BoissonController@lookMe');

Route::post('/boisson/store', 'BoissonController@store');

Route::get('/boissons/tousListe', 'BoissonController@allListed')->name("createBoisson");

Route::get('/boiss', 'monControleur@boissons')->name("boissons");

Route::get('/ing', 'monControleur@ingredients')->name("ingredients");

Route::get('/rec', 'monControleur@recettes')->name("recettes");

Route::get('/mat', 'monControleur@materiel')->name("materiel");

Route::get('/mon', 'monControleur@monnayeur')->name("monnayeur");



// Route::post('/maBoisson', 'monControleur@store');
// Route::get('','');
