<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SolicitanteController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/solicitante', [SolicitanteController::class, 'index'])->name('solicitante.index');
    Route::get('/solicitante-create',[SolicitanteController::class, 'create'])->name('solicitante.create');
    Route::post('/solicitante-store',[SolicitanteController::class, 'store'])->name('solicitante.store');
    Route::get('/solicitante-edit-{solicitante}', [SolicitanteController::class, 'edit'])->name('solicitante.edit');
    Route::put('/solicitante-update-{solicitante}', [SolicitanteController::class, 'update'])->name('solicitante.update');
    Route::delete('/solicitante-destroy-{solicitante}', [SolicitanteController::class, 'destroy'])->name('solicitante.destroy');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});


Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
require __DIR__.'/auth.php';
