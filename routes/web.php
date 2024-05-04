<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::prefix('account')->as('account.')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('index');
        Route::get('/history', [AccountController::class, 'history'])->name('history');
        Route::get('/loginStatus', [AccountController::class, 'login'])->name('login');
        Route::get('/rgpd', [AccountController::class, 'rgpd'])->name('rgpd');
        Route::get('/rgpd/print', [AccountController::class, 'rgpdPrint'])->name('rgpd-print');
    });
});

Route::prefix('about')->as("about.")->group(function() {
    Route::get('/userAgreement', [\App\Http\Controllers\AboutController::class, 'userAgreement'])->name('userAgreement');
    Route::get('/privacy', [\App\Http\Controllers\AboutController::class, 'privacy'])->name('privacy');
});

Route::prefix('auth')->as('auth.')->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
    Route::get('{provider}/redirect', [\App\Http\Controllers\Auth\AuthController::class, 'redirect'])->name('redirect');
    Route::get('{provider}/callback', [\App\Http\Controllers\Auth\AuthController::class, 'callback'])->name('callback');
    Route::get('{provider}/setup/{email}', [\App\Http\Controllers\Auth\AuthController::class, 'setupAccount'])->name('setup-register');
    Route::post('{provider}/setup/{email}', [\App\Http\Controllers\Auth\AuthController::class, 'setupAccountSubmit'])->name('setup-register.submit');
    Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
    Route::post('password-confirm', [\App\Http\Controllers\Auth\AuthController::class, 'confirmPassword'])
        ->name('confirm-password')
        ->middleware(['auth', 'throttle:6,1']);
});

Route::get('password-confirm', [\App\Http\Controllers\Auth\AuthController::class, 'confirmPasswordForm'])
    ->name('password.confirm')
    ->middleware('auth');

Route::get('/test', function () {
    dd(\Pharaonic\Laravel\Menus\Models\Menu::section('account_head')->get());
});
