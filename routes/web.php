<?php


use App\Http\Controllers\MovieController;
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
Route::view('/', 'home')->name('home');

Route::get('/movies/list', [MovieController::class, 'getMovies'])->name('movies.list');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/{movie}/alquilar', [MovieController::class, 'edit'])->name('movies.edit');
Route::patch('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');



Auth::routes(['register' => true]);
