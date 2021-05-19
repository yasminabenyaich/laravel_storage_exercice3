<?php

use App\Http\Controllers\UserController;
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
    $home="home";
    return view('home',compact('home'));
}) ->name('home');

Route::resource('user',UserController::class);
Route::post("user/{id}/download", [UserController::class, 'download']);
Route::resource('portfolio', PortfolioController::class);
Route::post("portfolio/{id}/download", [PortfolioController::class, 'download']);
Route::resource('galerie', GallerieController::class);
Route::post("galerie/{id}/download", [GallerieController::class, 'download']);
Route::resource('service', ServiceController::class);
Route::resource('caracteristique', ServiceController::class);