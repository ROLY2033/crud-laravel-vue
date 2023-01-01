<?php

use App\Http\Controllers\Api\V1\PornstarController;
use App\Http\Controllers\Api\V1\SkillController;
use App\Models\Pornstar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('skills',SkillController::class);
});
Route::group(['prefix' => 'v1'] , function (){
    Route::apiResource('pornstars', PornstarController::class);
});
