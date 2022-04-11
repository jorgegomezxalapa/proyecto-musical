<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now store something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('artista')->group(function () {
    Route::get('show', [ArtistaController::class, 'show']);
    Route::get('showById/{$id}', [ArtistaController::class, 'showById']);
    Route::post('store', [ArtistaController::class, 'store']);
    Route::put('update', [ArtistaController::class, 'update']);
    Route::delete('delete', [ArtistaController::class, 'delete']);
});

Route::prefix('cancion')->group(function () {
    Route::get('show', [CancionController::class, 'show']);
    Route::get('showById/{$id}', [CancionController::class, 'showById']);
    Route::post('store', [CancionController::class, 'store']);
    Route::put('update', [CancionController::class, 'update']);
    Route::delete('delete', [CancionController::class, 'delete']);
});

Route::prefix('album')->group(function () {
    Route::get('show', [AlbumController::class, 'show']);
    Route::get('showById/{$id}', [AlbumController::class, 'showById']);
    Route::post('store', [AlbumController::class, 'store']);
    Route::put('update', [AlbumController::class, 'update']);
    Route::delete('delete', [AlbumController::class, 'delete']);
});

Route::prefix('home')->group(function () {
    Route::get('show', [HomeController::class, 'show']);
    Route::get('showById/{$id}', [HomeController::class, 'showById']);
    Route::post('store', [HomeController::class, 'store']);
    Route::put('update', [HomeController::class, 'update']);
    Route::delete('delete', [HomeController::class, 'delete']);
});
