<?php

use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ValidatorController;

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
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/seat/{id}', function ($id) {
    return view('seat.index', ['idSeat' => $id]);
});

Route::get('/download-excel', [StudentController::class, 'downloadSampleExcel'])->name('excel.download');

Route::middleware('auth')->group(function () {
    //Student routes
    Route::resource('/student', StudentController::class);
    Route::get('/destroy-all', [StudentController::class, 'destroyAll'])->name('student.destroyAll');

    // Dashboard routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Presentation routes
    Route::get('/presentation', [PresentationController::class, 'show']);

    // Validator
    Route::get('/queue', [ValidatorController::class, 'showQueue']);
});

require __DIR__.'/auth.php';
