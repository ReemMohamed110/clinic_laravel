<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/majors',[MajorsController::class, 'index']
)->name('majors');
Route::get('/doctors',[DoctorsController::class, 'index']
)->name('doctors');
Route::get('/login',[LoginController::class, 'index']
)->name('login');
Route::get('/register',[RegisterController::class, 'index']
)->name('register');
Route::get('/contact',[ContactController::class, 'index']
)->name('contact');
Route::post('/contact_logic',[ContactController::class, 'sendMessage']
)->name('contact_logic');
