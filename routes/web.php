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

//Route::get('/', function () {
//    return view('welcome');
//});



// homepage+steam
Route::get("/","PostController@index")->name("index");
Route::get("/hakkimizda","PostController@aboutUs")->name("aboutus");
Route::get("/oyun-detay/{appid}","PostController@show")->name("getData.show");



//valorant
Route::get("/valorant-api","ValorantController@index")->name("valorant.index");
Route::get("/valorant-api-detay/{uuid}","ValorantController@show")->name("valorant.show");
Route::get("/valorant-api/maps","ValorantController@maps")->name("valorant.maps.index");
Route::get("/valorant-api/weapons","ValorantController@weapons")->name("valorant.weapons.index");
Route::get("/valorant-api-weapons-detay/{uuid}","ValorantController@weaponsDetail")->name("valorant.weapons.detail");
Route::get("/valorant-api-weapons-skinDetay/{uuid}","ValorantController@weaponsSkinDetail")->name("valorant.weapons.skin.detail");
















Route::get("/{name?}","PostController@search")->name("getData.search");
