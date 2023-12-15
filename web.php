<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\schoolcontroller;
use app\Models\teacher;

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

// // Route::get('/jmbs', jmbscontroller::class, 'index'])->name('jmbs');
    
// Route::get('/teacher', function () {
//     return view('teacher');
// });

// Route::get('/student', function () {
//     return view('student');
// });

Route::get('/teacher', [schoolcontroller::class, 'index'])->name('teacher-index');