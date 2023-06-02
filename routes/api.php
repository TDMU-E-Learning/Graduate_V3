<?php

use App\Http\Controllers\QueueController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route::post('/test', function (Request $request) {
//     return 'Hello';
// });

Route::post('/result', [StudentController::class, 'show']);

Route::middleware(['auth.session'])->group(function () {
    // get data for ajax :)))))
    Route::post('find', [StudentController::class, 'find']);
    Route::get('/queue', [QueueController::class, 'getAll']);
    Route::post('/upload-excel', [StudentController::class, 'upload'])->name('student.upload');
});


