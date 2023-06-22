<?php

use App\Http\Controllers\ScanController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QueueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('find', [StudentController::class, 'find']);
Route::post('create_student_in_queue', [ScanController::class, 'store']);
Route::get('show_list_queue', [QueueController::class, 'index']);

Route::middleware(['auth.session'])->group(function () {
    // Route::get('/queue', [QueueController::class, 'getAll']);
});


