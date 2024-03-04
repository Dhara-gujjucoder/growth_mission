<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StepRegistrationController;
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

Route::middleware(['auth', 'user-access:customer','step-verified'])->group(function () {
    // Route::get('register/step/{step}', function () {
    //     return redirect('dashboard');
    // })->middleware(['step.verified']);
    Route::get('step/{step}/{substep}', [StepRegistrationController::class, 'step'])->name('step_reg');
    Route::post('step/{step}/{substep}', [StepRegistrationController::class, 'step'])->name('step_reg');
     
    
});

Route::middleware(['auth', 'user-access:customer','is-verified'])->group(function () {
    // Route::get('register/step/{step}', function () {
    //     return redirect('dashboard');
    // })->middleware(['step.verified']);
    // Route::post('step/{step}/{substep}', [StepRegistrationController::class, 'step'])->name('step_reg');

    Route::get('/', [HomeController::class, 'customerHome'])->name('dashboard');
    Route::get('/dashboard', [HomeController::class, 'customerHome'])->name('dashboard');
    Route::post('previous_step', [StepRegistrationController::class, 'previous_step'])->name('previous_step');

    
});