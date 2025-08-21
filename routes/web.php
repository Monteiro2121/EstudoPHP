<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/formulario', [FormularioController::class, 'index'])->name('formulario.index');
Route::post('/formulario', [FormularioController::class, 'store'])->name('formulario.store');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
