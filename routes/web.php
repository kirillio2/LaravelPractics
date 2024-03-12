<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ScheduleController;

use App\Http\Controllers\Admin\AcademicPerformanceController;
use App\Http\Controllers\Admin\RecordBookController;
use App\Http\Controllers\Admin\ReferenceController;
use App\Http\Controllers\Admin\TestPapersController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);

    Route::get('/schedule', [ScheduleController::class, 'index']);
    Route::get('/events', [ScheduleController::class, 'events']);

    Route::get('/academic-performance', [AcademicPerformanceController::class, 'index']);
    Route::get('/record-book', [RecordBookController::class, 'index']);
    Route::get('/reference', [ReferenceController::class, 'index']);
    Route::get('/test-papers', [TestPapersController::class, 'index']);
});
