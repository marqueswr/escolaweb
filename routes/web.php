<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DisciplinaController;
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
    Route::delete('/register', [ProfileController::class, 'create'])->name('profile.create');
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

Route::middleware('auth')->group(function () {
    Route::get('/disciplina', [DisciplinaController::class, 'index'])->name('disciplina.index');
    Route::get('/disciplina-create',[DisciplinaController::class, 'create'])->name('disciplina.create');
    Route::post('/disciplina-store',[DisciplinaController::class, 'store'])->name('disciplina.store');
    Route::get('/disciplina-edit-{disciplina}', [DisciplinaController::class, 'edit'])->name('disciplina.edit');
    Route::put('/disciplina-update-{disciplina}', [DisciplinaController::class, 'update'])->name('disciplina.update');
    Route::delete('/disciplina-destroy-{disciplina}', [DisciplinaController::class, 'destroy'])->name('disciplina.destroy');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/serie', [SerieController::class, 'index'])->name('serie.index');
    Route::get('/serie-create',[SerieController::class, 'create'])->name('serie.create');
    Route::post('/serie-store',[SerieController::class, 'store'])->name('serie.store');
    Route::get('/serie-edit-{serie}', [SerieController::class, 'edit'])->name('serie.edit');
    Route::put('/serie-update-{serie}', [SerieController::class, 'update'])->name('serie.update');
    Route::delete('/serie-destroy-{serie}', [SerieController::class, 'destroy'])->name('serie.destroy');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/setor', [SetorController::class, 'index'])->name('setor.index');
    Route::get('/setor-create',[SetorController::class, 'create'])->name('setor.create');
    Route::post('/setor-store',[SetorController::class, 'store'])->name('setor.store');
    Route::get('/setor-edit-{setor}', [SetorController::class, 'edit'])->name('setor.edit');
    Route::put('/setor-update-{setor}', [SetorController::class, 'update'])->name('setor.update');
    Route::delete('/setor-destroy-{setor}', [SetorController::class, 'destroy'])->name('setor.destroy');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});

Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
require __DIR__.'/auth.php';
