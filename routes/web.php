<?php

use App\Http\Controllers\ProcessesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PaginationController;
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

Route::get('/getdata',[DataController::class, 'getdata']);

Route::get('/pro',[ProcessesController::class,'exeProcess']);

Route::get('/page',[PaginationController::class, 'page']);
