<?php

use App\Http\Controllers\admin\EditorController;
use App\Http\Controllers\admin\GameController;
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\admin\HomeController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//route
Route::middleware(['auth', 'verified'])->name('admin.')->prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('/games', GameController::class);
    Route::resource('/editors', EditorController::class);
    Route::resource('/genres', GenreController::class);
    //route for mail test
    //Route::get('/ciccio', [GameController::class, 'testMail'])->name('ciccio');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
