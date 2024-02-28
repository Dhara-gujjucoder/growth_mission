<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'customerlogin']);
Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logouts');


// All Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('dashboard');
});

// All staff Routes List
Route::middleware(['auth', 'user-access:staff'])->prefix('staff')->name('staff.')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'staffHome'])->name('dashboard');
});

// All customer Routes List
Route::middleware(['auth', 'user-access:customer'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'customerHome'])->name('dashboard');
});

// Password reset routes
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

use App\Http\Controllers\EmailController;

Route::get('/send-test-email', [EmailController::class, 'sendTestEmail']);
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

