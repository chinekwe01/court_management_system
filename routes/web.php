<?php

use App\Models\CourtCase;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourtCaseController;
use App\Http\Controllers\JudgementController;

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
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Lawyer Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:lawyer'])->group(function () {
    Route::get('/lawyer/home', [HomeController::class, 'lawyerHome'])->name('lawyer.home');
});

/*------------------------------------------
--------------------------------------------
All Judge Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:judge'])->group(function () {
    Route::get('/judge/home', [JudgementController::class, 'judgementTable'])->name('judge.home');
    Route::get('judge/cases', [JudgementController::class, 'casesTable'])->name('judge.cases');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/cases', [CourtCaseController::class, 'index'])->name('admin.case.index');
    Route::get('/cases/{id}', [CourtCaseController::class, 'show'])->name('admin.case.show');
    Route::get('/case/edit/{id}', [CourtCaseController::class, 'edit'])->name('admin.case.edit');
    Route::put('/cases/{id}/update', [CourtCaseController::class,'update'])->name('admin.case.update');
    Route::post('/cases/store', [CourtCaseController::class,'store'])->name('admin.case.store');
    Route::delete('/cases/{id}', [CourtCaseController::class,'destroy'])->name('admin.case.destroy');
    Route::get('/judgement', [JudgementController::class, 'index'])->name('admin.judgement.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
