<?php

use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\WorkspaceController;

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

Route::get('/', function() {
    return redirect('login');
});

Route::prefix('login')->group(function() {
    Route::resource('/', AuthController::class);
    Route::get('/', [AuthController::class, 'index'])->name('login');
});

Route::middleware('auth:sanctum')->group(function() {
    Route::resource('workspace', WorkspaceController::class);
    Route::middleware('count.quotes')->group(function() {
        Route::resource('workspace.token', Tokencontroller::class);
    });
});
