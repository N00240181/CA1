<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfileController;
use Phiki\Phast\Root;

/* This file contains all of the routes for the project. Essentially these
are all of the different pages of the website, for example albums.index is
the index page which shows all of the albums. The pages are contained in the AlbumController
which contains the page's functions. */

Route::get('/', function () {
    return view('welcome');
});

Route::resource('albums', AlbumController::class);
Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('albums.show');
Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
Route::put('/albums/{album}', [AlbumController::class, 'update'])->name('albums.update');
Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
