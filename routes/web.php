<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\databaseController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/data', [databaseController::class, 'index1']);
// Route::get('/data', [databaseController::class, 'index2']);
// Route::get('/data', [databaseController::class, 'index4']);

// Route::get('/data', [databaseController::class, 'index3']);

// Route::get('/data', [databaseController::class, 'index12']);
Route::get('/page', [UserController::class, 'index']);




Route::get('/test', [ProcessController::class, 'test']);

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