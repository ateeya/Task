<?php

use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout');
});

Route::get('/index',[TrainerController::class, 'index'])->name('trainer.index');
Route::get('/Create',[TrainerController::class, 'create'])->name('trainer.create');
Route::get('/trainer/{id}/edit', [TrainerController::class, 'edit'])->name('trainer.edit');
Route::put('/trainer/{id}', [TrainerController::class, 'update']);
Route::get('/trainer/{id}/show', [TrainerController::class, 'show'])->name('trainer.show');
Route::delete('/{id}', [TrainerController::class, 'destroy'])->name('trainer.destroy');
Route::post('/store',[TrainerController::class, 'store'])->name('trainer.store');
