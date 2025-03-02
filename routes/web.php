<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\PriceTariffController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    # Agenda Routes
    Route::get('/agenda', [ScheduleController::class, 'index'])->name('agenda.index');

    # Pacientes Routes
    Route::get('/pacientes', [PatientController::class, 'index'])->name('pacientes.index');

    # Gastos Routes
    Route::get('/gastos', [ExpenseController::class, 'index'])->name('gastos.index');

    # Laboratorios Routes
    Route::get('/laboratorios', [LaboratoryController::class, 'index'])->name('laboratorios.index');

    # Aranceles de Precios Routes
    Route::get('/aranceles-de-precios', [PriceTariffController::class, 'index'])->name('aranceles-de-precios.index');
});

require __DIR__.'/auth.php';
