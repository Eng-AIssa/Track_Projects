<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';







Route::get('lara',[\Laratrust\Http\Controllers\RolesAssignmentController::class,'index'])->name('lara');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/processes', [App\Http\Controllers\ProcessController::class, 'index'])->name('processes');
Route::get('/new_process', [App\Http\Controllers\ProcessController::class, 'create'])->name('new_process');
Route::post('/store_process', [App\Http\Controllers\ProcessController::class, 'store'])->name('store_process');
Route::get('/new_user', [App\Http\Controllers\UserController::class, 'create'])->name('new_user');
Route::get('/employees', [App\Http\Controllers\UserController::class, 'index'])->name('employees');
Route::post('/private', [App\Http\Controllers\UserController::class, 'store'])->name('private');
Route::get('/my_process', [App\Http\Controllers\ProcessController::class, 'show'])->name('my_process');
Route::post('/process', [App\Http\Controllers\ProcessController::class, 'show'])->name('find_process');
Route::post('/find_updates', [App\Http\Controllers\UpdateController::class, 'show'])->name('find_updates');
Route::post('/details', [App\Http\Controllers\UserController::class, 'details'])->name('details');
Route::get('/show_details', [App\Http\Controllers\UserController::class, 'show'])->name('show_details');
Route::get('/updates', [App\Http\Controllers\UpdateController::class, 'index'])->name('updates');
Route::post('add_update',[App\Http\Controllers\UpdateController::class,'store'])->name('add_update');
Route::get('update_form',[App\Http\Controllers\UpdateController::class,'create'])->name('update_form');

Route::get('update',function (){
    return view('update');
});
