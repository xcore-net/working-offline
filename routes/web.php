<?php

use App\Http\Controllers\DbController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/offline', function () {
    return view('auth.offlinelogin');
});



//DB
Route::prefix('db')->group(function () {
    Route::get('/users',[DbController::class,'getAllUsers'] )->name('user.index');
    Route::get('/users/{name}',[DbController::class,'getUsersWhereName'] );
    Route::get('/user/{id}',[DbController::class,'getUserById'] );
    Route::get('/users/emails',[DbController::class,'getUsersEmails'] );
});