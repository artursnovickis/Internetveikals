<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

 Route::group(['middleware'=>'auth'], static function (){

     Route::get('/bank', function () {
         return view('bank');
     });

     Route::get('/information', function () {
         return view('information');
     });

     Route::get('/jaunumi', function () {
         return view('jaunumi');
     });

     Route::get('/kontakt', function () {
         return view('kontakt');
     });

     Route::get('/login', function () {
         return view('auth-login');
     });

     Route::get('/preces', function () {
         return view('preces');
     });
     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 });



Auth::routes();


