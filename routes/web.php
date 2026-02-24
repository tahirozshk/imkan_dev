<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hakkimizda', [HomeController::class, 'about'])->name('about');

Route::get('/projeler', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projeler/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/hizmetler', [ServiceController::class, 'index'])->name('services.index');
Route::get('/hizmetler/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/deprem-testi', [HomeController::class, 'earthquakeTest'])->name('earthquake-test');

Route::get('/iletisim', [ContactController::class, 'index'])->name('contact.index');
Route::post('/iletisim', [ContactController::class, 'store'])->name('contact.store');
