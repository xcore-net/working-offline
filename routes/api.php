<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

Route::post('/createFolder', [ApiController::class, 'createFolder']);

//DB routes

require __DIR__.'/auth.php';