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

Route::get('/home', 'HomeController@index');
Route::get('/accueil', 'HomeController@accueil');
Route::get('/contact', 'HomeController@contact');
Route::get('/produit', 'ProduitController@afficheProduit');
Route::post('/contact', 'HomeController@insertOne');
Route::get('/messages', 'MessageController@afficheMessages');
