<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CanalController;


Route::get('/', [CanalController::class, 'index']);
Route::get('/canals/create', [CanalController::class, 'create']);
Route::get('/canals/{id}', [CanalController::class, 'show']);
Route::post('/canals', [CanalController::class, 'store']);
Route::delete('/canals/{id}', [CanalController::class, 'destroy']);
Route::get('/canals/edit/{id}', [CanalController::class, 'edit']);
Route::put('/canals/update/{id}', [CanalController::class, 'update']);

Route::get('/cadastre', [CanalController::class, 'cadastro']);
Route::get('/sobre', [CanalController::class, 'sobre']);

Route::get('/dashboard', [CanalController::class, 'dashboard']);


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
