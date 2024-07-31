<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/index', [ProjectController::class, 'index'])->name('index');
Route::get('/appointment', [ProjectController::class, 'appointment'])->name('appointment');
Route::post('/addAppointment', [ProjectController::class, 'addAppointment'])->name('addAppointment');
Route::get('/schedulestiming', [ProjectController::class, 'schedulestiming'])->name('schedulestiming');
Route::get('/contact', [ProjectController::class, 'contact'])->name('contact');
Route::get('/departments', [ProjectController::class, 'getDepartments'])->name('getDepartments');
Route::get('/doctors/{departmentId}', [ProjectController::class, 'getDoctorsByDepartment'])->name('getDoctorsByDepartment');


////// Admin /////

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
