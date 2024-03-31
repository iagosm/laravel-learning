<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
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
    return redirect('/series');
});

// Router::resource('/series', SerieController)

Route::resource('/series', SeriesController::class)
    ->except('show');
    // ->only(['index', 'create', 'store', 'destroy', 'edit']);
// Route::controller(SeriesController::class)->group( function() {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/create', 'create')->name('series.create');
//     Route::post('/series/save', 'store')->name('series.store');
// });
 
Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');