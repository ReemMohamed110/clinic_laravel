<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\RegisterController;
use App\Models\Doctor;

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


//model
Route::get('/create_doctor', function () {
  // Doctor::create([
  //   'name'=>'sara',
  //   'email'=>'sara@gmail.com',
  //   'image'=>'photo',
  //   'major_id'=>1,
  //   'gender'=>'female',
  //   'phone'=>'01234567891']); 
  /////////////////////////
  // Doctor::create([
  //   'name'=>'ahmed',
  //   'email'=>'ahmed@gmail.com',
  //   'image'=>'photo',
  //   'major_id'=>1,
  //   'gender'=>'female',
  //   'phone'=>'01234567891']); 
    // dd(Doctor::find(1));
    $doctor=Doctor::find(1);
    $doctor->update([
      'name'=>'sara update 1'
    ]);
    //delete 
    Doctor::find(1)->delete();

});
