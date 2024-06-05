<?php

use App\Http\Controllers\AccountTypeController;
use App\Http\Controllers\FamilyHistoryController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\IllnessGroupController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PhysicalExamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaccinationController;
use App\Models\IdentificationType;
use App\Models\IllnessGroup;
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

    Route::get('/patient/view', function () {
        return Inertia::render('Patient/PatientView');
    })->name('patient');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/account/getlist', [AccountTypeController::class, 'getlist'])->name('account.getlist');
    Route::get('/account/getAll', [AccountTypeController::class, 'getAll'])->name('account.getAll');


    Route::get('/physicalExam/getlist', [PhysicalExamController::class, 'getlist'])->name('physicalExam.getlist');

    Route::get('/vaccine/getlist', [VaccinationController::class, 'getlist'])->name('vaccine.getlist');
    Route::get('/vaccine/getlistAdd', [VaccinationController::class, 'getlistAdd'])->name('vaccine.getlistAdd');

    Route::get('/fh/getlist', [FamilyHistoryController::class, 'getlist'])->name('fh.getlist');
    Route::get('/fh/getlistAdd', [FamilyHistoryController::class, 'getlistAdd'])->name('fh.getlistAdd');


    Route::get('/illness/getlist', [IllnessGroupController::class, 'getlist'])->name('illness.getlist');
    Route::get('/illness/getlistChild', [IllnessGroupController::class, 'getlistChild'])->name('illness.getlistChild');
    Route::get('/illness/getlistSymp', [IllnessGroupController::class, 'getlistSymp'])->name('illness.getlistSymp');
    Route::get('/illness/getlistSympV2', [IllnessGroupController::class, 'getlistSympV2'])->name('illness.getlistSympV2');

    Route::get('/patient/getlist', [PatientController::class, 'getlist'])->name('patient.getlist');

    Route::resources([
        'account' => AccountTypeController::class,
        'patient' => PatientController::class,
        'illness' => IllnessGroupController::class,
        'illnesschild' => IllnessController::class,
        'vaccine' => VaccinationController::class,
        'fh' => FamilyHistoryController::class,
        'physicalExam' => PhysicalExamController::class,
    ]);




});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
