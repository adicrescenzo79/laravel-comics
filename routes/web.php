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
  $database = config('comics');
  return view('home')->with('volumi', $database);
})->name('home');


Route::get('/comic/{id}', function ($id) {
  $comics = config('comics');
  $comic = $comics[$id];

  return view('comic')->with('volume', $comic);
})->name('comic');
