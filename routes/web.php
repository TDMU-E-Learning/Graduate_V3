<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/seat/{id}', function ($id) {
    return view('seat.index', ['idSeat' => $id]);
});

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

// Route::get('/result', function () {
//     return view('desktop-details');
// });

Route::post('/result', [StudentController::class, 'show']);

Route::resource('/student', StudentController::class)->middleware(['auth', 'verified']);

Route::post('/upload-excel', [StudentController::class, 'upload'])->middleware(['auth', 'verified'])->name('student.upload');
Route::get('/destroy-all', [StudentController::class, 'destroyAll'])->middleware(['auth', 'verified'])->name('student.destroyAll');

Route::get('/download-excel', function(){
    $file = public_path('Files/mau_them_danh_sach_svhv_tot_nghiep.csv');
    $headers = ['Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

    return response()->download($file, 'file.csv', $headers);
})->name('excel.download');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
