<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\BenefitJobController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WorkPreferenceController;
use App\Http\Controllers\WelcomeController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin_jobs', function () {
    return view('admin_jobs');
})->name('admin_jobs');

Route::get('/button1', function () {
    return view('button1');
})->name('button1');


Route::post('example', [ExampleController::class, 'store'])->name('example');


// benefits route
Route::get('benefits', [BenefitController::class, 'index'])->name('benefits');
Route::post('benefit', [BenefitController::class, 'store'])->name('benefit');

// experience route
Route::get('experiences', [ExperienceController::class, 'index'])->name('experiences');
Route::post('experiences', [ExperienceController::class, 'store'])->name('experiences');

// benefits_jobs route
Route::get('benefits_jobs', [BenefitJobController::class, 'index'])->name('benefits_jobs');
Route::post('benefits_jobs', [BenefitJobController::class, 'store'])->name('benefits_jobs');

// jobs route
Route::get('jobs', [JobController::class, 'index'])->name('jobs');
Route::post('jobs', [JobController::class, 'store'])->name('jobs');


// domains route
Route::get('domains', [DomainController::class, 'index'])->name('domains');
Route::post('domains', [DomainController::class, 'store'])->name('domains');

// languages route
Route::get('languages', [LanguageController::class, 'index'])->name('languages');
Route::post('languages', [LanguageController::class, 'store'])->name('languages');

// work_preferences route
Route::get('work_preferences', [WorkPreferenceController::class, 'index'])->name('work_preferences');
Route::post('work_preferences', [WorkPreferenceController::class, 'store'])->name('work_preferences');

// welcome route
Route::get('/', [WelcomeController::class, 'showWelcome']);





require __DIR__.'/auth.php';
