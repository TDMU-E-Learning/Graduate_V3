<?php

use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MCController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\SupportMCController;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::post('/result', [StudentController::class, 'show']);

Route::get('/seat/{id}', function ($id) {
    return view('seat.index', ['idSeat' => $id]);
});

Route::get('/download-excel', [StudentController::class, 'downloadSampleExcel'])
    ->name('excel.download');

Route::middleware('auth')->group(function () {
    //Student routes
    Route::resource('/student', StudentController::class);
    Route::get('/destroy-all', [StudentController::class, 'destroyAll'])
        ->name('student.destroyAll');
    Route::post('/upload-excel', [StudentController::class, 'upload'])
        ->name('student.upload');

    // Dashboard routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::get('/main_people', function () {
        return view('main_people');
    });

    //MC
    Route::get('/mc', [MCController::class, 'index']);
    Route::get('/screen', [MCController::class, 'screen']);

    //Support MC
    Route::get('/support-mc', [SupportMCController::class, 'index']);

    //Scan
    Route::get('/scan', [ScanController::class, 'index']);
});

require __DIR__.'/auth.php';
