<?php

use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Models\IdentificationType;
use App\Models\SalaryGrade;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
   /*  return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]); */
    return redirect('/login');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
        // return view('welcome');
    })->name('dashboard');

    // Route::get('/patient', function () {
    //     return Inertia::render('Patient/PatientMain');
    // })->name('patient');

    // Route::get('/account', function () {
    //     return Inertia::render('Accounts/AccountMain');
    // })->name('account');
    Route::get('/account/getlist', [AccountTypeController::class, 'getlist'])->name('account.getlist');
    Route::resources([
        '/account' => AccountTypeController::class,
        '/patient' => PatientController::class,
    ]);




});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
