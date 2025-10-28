<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReparationsController;
use App\Http\Controllers\TechnicinesController;
use App\Http\Controllers\VehiculesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/technicines_enregistrement',[TechnicinesController::class,'technicines_enregistrement'])->name('technicines_enregistrement');

Route::get('/techniciens_list',[TechnicinesController::class,'techniciens_list'])->name('techniciens_list');
Route::get('/supprimer/{id}',[TechnicinesController::class,'supprimer'])->name('supprimer');
Route::get('/modifier/{id}',[TechnicinesController::class,'modifier'])->name('modifier');
Route::post('/enregistrement/{id}',[TechnicinesController::class,'enregistrement'])->name('enregistrement');
Route::delete('/supprimer/{id}', [TechnicinesController::class, 'supprimer'])->name('supprimer');


Route::get('/vehicules_enregistrement',[VehiculesController::class,'vehicules_enregistrement'])->name('vehicules_enregistrement');
Route::get('/vehicules_list',[VehiculesController::class,'vehicules_list'])->name('vehicules_list');
Route::get('/modifier_vehicules/{id}',[VehiculesController::class,'modifier_vehicules'])->name('modifier_vehicules');
Route::get('/supprimer_vehicules/{id}',[VehiculesController::class,'supprimer_vehicules'])->name('supprimer_vehicules');
Route::get('/enregistrement/{id}',[VehiculesController::class,'enregistrement'])->name('enregistrement');
Route::delete('/supprimer_vehicules/{id}', [VehiculeSController::class, 'supprimer_vehicules'])->name('supprimer_vehicules');


Route::get('/reparation/{id}',[ReparationsController::class,'reparation'])->name('reparation');
Route::get('/reparations_enregistrement',[ReparationsController::class,'reparations_enregistrement'])->name('reparations_enregistrement');
Route::get('/reparation_list',[ReparationsController::class,'reparation_list'])->name('reparation_list');
Route::get('/modifier_reparation/{id}',[ReparationsController::class,'modifier_reparation'])->name('modifier_reparation');
Route::get('/supprimer_reparation/{id}',[ReparationsController::class,'supprimer_reparation'])->name('supprimer_reparation');
Route::get('/enregistrement_reparation/{id}',[ReparationsController::class,'enregistrement_reparation'])->name('enregistrement_reparation');
Route::delete('/supprimer_reparation/{id}', [ReparationsController::class, 'supprimer_reparation'])->name('supprimer_reparation');