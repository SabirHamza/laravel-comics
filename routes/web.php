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
    $links = config('dc-comics-links.DcComicsLinks');

    $DcComics = config('dc-comics-links.DcComics');

    $Cards = config('dc-comics-links.Cards');

    return view('homepage', compact('links', 'DcComics', 'Cards'));
});
