<?php

use App\Http\Controllers\CourtCaseController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\CourtCase;

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
    Route::get('/judge/home', [HomeController::class, 'judgeHome'])->name('judge.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/cases', [CourtCaseController::class, 'index'])->name('admin.case.index');
    Route::post('/cases/store', [CourtCaseController::class,'store'])->name('admin.case.store');

});
