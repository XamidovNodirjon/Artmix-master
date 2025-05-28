<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EaselController;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('gallery', [ServiceController::class, 'Gallery'])->name('gallery');
Route::get('/artist/{artist}', [ArtistController::class, 'show'])->name('artist.show');
Route::get('market', [ServiceController::class, 'Market'])->name('market');
Route::get('getEasel', [EaselController::class, 'getEasel'])->name('getEasel');
Route::get('print', [ServiceController::class, 'Print'])->name('print');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('gallery-historical-genre', [GalleryController::class, 'historyGenre'])->name('historyGenre');
Route::get('gallery-portrait-genre', [GalleryController::class, 'portraitGenre'])->name('portraitGenre');
Route::get('gallery-peyzaj-genre', [GalleryController::class, 'landscapeGenre'])->name('landscapeGenre');
Route::get('gallery-naturmort-genre', [GalleryController::class, 'naturmortGenre'])->name('naturmortGenre');
Route::get('gallery-abstraction-genre', [GalleryController::class, 'abstractsiyaGenre'])->name('abstractionGenre');
Route::get('gallery-animalistic-genre', [GalleryController::class, 'animalisticGenre'])->name('animalisticGenre');
Route::get('gallery-architectural-genre', [GalleryController::class, 'architecturalGenre'])->name('architecturalGenre');
Route::get('gallery-graphics-genre', [GalleryController::class, 'graphicsGenre'])->name('graphicsGenre');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::post('easel-store', [EaselController::class, 'store'])->name('easelCreate');
Route::get('easel', [EaselController::class, 'index'])->name('easel');
Route::get('/easel/{id}/edit', [EaselController::class, 'edit'])->name('easelEdit');
Route::put('/easel/update/{id}', [EaselController::class, 'update'])->name('update-easel');
Route::delete('/easel/{id}', [EaselController::class, 'destroy'])->name('easel.destroy');
Route::get('artists', [ArtistController::class, 'index'])->name('artists');
Route::post('artist/store', [ArtistController::class, 'store'])->name('artist-store');
Route::get('/artist/{id}/edit', [ArtistController::class, 'edit'])->name('edit-artist');
Route::put('/artist/update/{id}', [ArtistController::class, 'update'])->name('update-artist');
Route::delete('/artist/{id}', [ArtistController::class, 'destroy'])->name('artist.destroy');
//Route::get('/artist/{id}', [ArtistController::class, 'show'])->name('artist.show');
Route::post('/artist/{id}/add-work', [ArtistController::class, 'addWork'])->name('artist.addWork');
Route::put('/artist/work/{id}/update', [ArtistController::class, 'updateWork'])->name('artist.updateWork');



