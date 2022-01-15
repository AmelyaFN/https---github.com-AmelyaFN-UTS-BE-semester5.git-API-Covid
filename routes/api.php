<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatienController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Get All Resource
Route::get('/patiens', [PatienController::class, 'index']);
// Add Resource
Route::post('/patiens', [PatienController::class, 'store']);
// Get Detail Resource
Route::get('/patiens/{id}', [PatienController::class, 'show']);
// Edit Resource
Route::put('/patiens/{id}', [PatienController::class, 'update']);
// Delete Resource
Route::delete('/patiens/{id}', [PatienController::class, 'destroy']);

