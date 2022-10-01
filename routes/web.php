<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
});
Route::post('user-register',[UserController::class, 'store'])->name('user.register');
Route::prefix('/')->middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
});

Route::get('/dashboard', [RegisteredUserController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/profile', [ProfileController::class,'profile'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
