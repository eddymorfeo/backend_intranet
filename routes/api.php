<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request){
//     return $request->user();
// });

Route::prefix('auth')->group(function(){
    Route::post('register', [AuthController::class, 'register']);
});