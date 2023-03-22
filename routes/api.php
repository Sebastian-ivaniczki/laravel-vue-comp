<?php

use App\Http\Controllers\api\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//  return $request->user();
//});

Route::get('/games', [GameController::class, 'index']);

//route for details

Route::get('/games/{game}', [GameController::class, 'show']);

Route::get('/editor/{id}/games', [GameController::class, 'editorGamesIndex']);

Route::post('/contact-mail', [GameController::class, 'send']);
