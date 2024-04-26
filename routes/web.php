<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('test');
});

Route::get('/students', function () {
    return Inertia::render('studentsList');
});

Route::get('/createStudents', function () {
    return Inertia::render('CreateForm');
});
Route::get('/createClass', function () {
    return Inertia::render('CreateClassForm');
});
Route::get('/classes', function () {
    return Inertia::render('ClassList');
})->name('Pages.ClassList');

Route::post('/storeStudents',[StudentController::class, 'store'])->name('storeStudents');
Route::post('/storeClass',[\App\Http\Controllers\ClasseController::class, 'store'])->name('storeClass');
//Route::resource('students', 'StudentController');
