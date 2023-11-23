<?php

use App\Exports\StudentExport;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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

Route::get("/", [DashboardController::class, "index"])->name("index");

Route::resource('dashboard', DashboardController::class);

Route::resource('student', StudentController::class);

Route::get('StudentExport', [StudentController::class, 'StudentExport'])->name('StudentExport');
Route::post('StudentImport', [StudentController::class, 'StudentImport'])->name('StudentImport');
