<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

Route::post('/createFolder', [ApiController::class, 'createFolder']);

//DB
Route::prefix('db')->group(function () {
    Route::get('/count-from-thousand/',[ApiController::class,'countFromThousand'] );
    Route::get('/user/{id}',[ApiController::class,'getUserById'] );
    Route::get('/users/emails',[ApiController::class,'getUsersEmails'] );
    Route::get('/users/vertifyAllEmail',[ApiController::class,'vertifyAllEmail'] );
    
});
require __DIR__.'/auth.php';