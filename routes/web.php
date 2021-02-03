<?php

use App\Providers\RouteServiceProvider;
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
    /*return view('auth/login');*/
    return redirect(RouteServiceProvider::HOME);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::resource('user',\App\Http\Controllers\UserController::class)->middleware(['auth']);


Route::get('PSearch',[\App\Http\Controllers\ProcessController::class,'search'])->name('PSearch');
Route::resource('Process',\App\Http\Controllers\ProcessController::class)->middleware(['auth']);



Route::get('USearch',[\App\Http\Controllers\UpdateController::class,'search'])->name('USearch');
Route::resource('update',\App\Http\Controllers\UpdateController::class)->middleware(['auth']);


