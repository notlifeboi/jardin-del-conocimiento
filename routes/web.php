<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\categoriascontroller;
use App\Http\Controllers\plantascontroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/top3', [HomeController::class, 'top3'])->name('top3');

Route::middleware('auth')->group(function () {
    Route::resource('/profile', userController::class);
    Route::post('/comments', [ComentarioController::class, 'store'])->name('comments.store');
    Route::put('/comments/{comment}', [ComentarioController::class, 'update'])->name('comments.update');
    Route::post('/comments/{comment}/reply', [ComentarioController::class, 'reply'])->name('comments.reply');
    Route::delete('/comments/{comment}', [ComentarioController::class, 'delete'])->name('comments.delete');
});

Route::resource('/categorias',categoriascontroller::class);
Route::resource('/plantas',plantascontroller::class);
Route::get('/categorias/{categoria}',[plantascontroller::class, "categorias"]);
Route::get('/categorias/crear/{categoria}',[plantascontroller::class, "categoria_crear_planta"]);

Auth::routes();

Auth::routes();

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/buscar', [SearchController::class, 'buscar'])->name('buscar');