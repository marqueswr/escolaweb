<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CopiaController;
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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('operacoes-responsaveis');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('operacoes-responsaveis');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('operacoes-responsaveis');
    Route::delete('/register', [ProfileController::class, 'create'])->name('profile.create')->middleware('operacoes-responsaveis');
});

Route::middleware('auth')->group(function () {
    Route::get('/solicitante', [SolicitanteController::class, 'index'])->name('solicitante.index')->middleware('operacoes-responsaveis');
    Route::get('/solicitante-create',[SolicitanteController::class, 'create'])->name('solicitante.create')->middleware('operacoes-responsaveis');
    Route::post('/solicitante-store',[SolicitanteController::class, 'store'])->name('solicitante.store')->middleware('operacoes-responsaveis');
    Route::get('/solicitante-edit-{solicitante}', [SolicitanteController::class, 'edit'])->name('solicitante.edit')->middleware('operacoes-responsaveis');
    Route::put('/solicitante-update-{solicitante}', [SolicitanteController::class, 'update'])->name('solicitante.update')->middleware('operacoes-responsaveis');
    Route::delete('/solicitante-destroy-{solicitante}', [SolicitanteController::class, 'destroy'])->name('solicitante.destroy')->middleware('operacoes-responsaveis');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/disciplina', [DisciplinaController::class, 'index'])->name('disciplina.index')->middleware('operacoes-disciplinas');
    Route::get('/disciplina-create',[DisciplinaController::class, 'create'])->name('disciplina.create')->middleware('operacoes-disciplinas');
    Route::post('/disciplina-store',[DisciplinaController::class, 'store'])->name('disciplina.store')->middleware('operacoes-disciplinas');
    Route::get('/disciplina-edit-{disciplina}', [DisciplinaController::class, 'edit'])->name('disciplina.edit')->middleware('operacoes-disciplinas');
    Route::put('/disciplina-update-{disciplina}', [DisciplinaController::class, 'update'])->name('disciplina.update')->middleware('operacoes-disciplinas');
    Route::delete('/disciplina-destroy-{disciplina}', [DisciplinaController::class, 'destroy'])->name('disciplina.destroy')->middleware('operacoes-disciplinas');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/serie', [SerieController::class, 'index'])->name('serie.index')->middleware('operacoes-series');
    Route::get('/serie-create',[SerieController::class, 'create'])->name('serie.create')->middleware('operacoes-series');
    Route::post('/serie-store',[SerieController::class, 'store'])->name('serie.store')->middleware('operacoes-series');
    Route::get('/serie-edit-{serie}', [SerieController::class, 'edit'])->name('serie.edit')->middleware('operacoes-series');
    Route::put('/serie-update-{serie}', [SerieController::class, 'update'])->name('serie.update')->middleware('operacoes-series');
    Route::delete('/serie-destroy-{serie}', [SerieController::class, 'destroy'])->name('serie.destroy')->middleware('operacoes-series');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/setor', [SetorController::class, 'index'])->name('setor.index')->middleware('operacoes-setores');
    Route::get('/setor-create',[SetorController::class, 'create'])->name('setor.create')->middleware('operacoes-setores');
    Route::post('/setor-store',[SetorController::class, 'store'])->name('setor.store')->middleware('operacoes-setores');
    Route::get('/setor-edit-{setor}', [SetorController::class, 'edit'])->name('setor.edit')->middleware('operacoes-setores');
    Route::put('/setor-update-{setor}', [SetorController::class, 'update'])->name('setor.update')->middleware('operacoes-setores');
    Route::delete('/setor-destroy-{setor}', [SetorController::class, 'destroy'])->name('setor.destroy')->middleware('operacoes-setores');
    // Route::get('/solicitante/show/{solicitante}', [SolicitanteController::class, 'show'])->name('solicitante.show');
});


Route::middleware('auth')->group(function () {
    Route::get('/copia', [CopiaController::class, 'index'])->name('copia.index');
    Route::get('/copia-create',[CopiaController::class, 'create'])->name('copia.create');
    Route::post('/copia-store',[CopiaController::class, 'store'])->name('copia.store');
    Route::get('/copia-edit-{copia}', [CopiaController::class, 'edit'])->name('copia.edit');
    Route::put('/copia-update-{copia}', [CopiaController::class, 'update'])->name('copia.update');
    Route::delete('/copia-destroy-{copia}', [CopiaController::class, 'destroy'])->name('copia.destroy');
    Route::get('/copia-show-{copia}', [CopiaController::class, 'show'])->name('copia.show');
    Route::get('/copiapormes', [CopiaController::class, 'pormes'])->name('copia.pormes');
});

Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
require __DIR__.'/auth.php';
