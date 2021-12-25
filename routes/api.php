<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\IdController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('smartphone',[SmartphoneController::class,'index']);
Route::get('Idsmartphone', [IdController::class,'getId']);
Route::post('smartphone', [SmartphoneController::class, 'create']);
Route::put('smartphone', [SmartphoneController::class, 'update']);
Route::delete('smartphone/{id}', [SmartphoneController::class, 'delete']);
