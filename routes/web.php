<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('students');
Route::get('/students', [StudentController::class, 'index'])->name('students');

Route::get('/students/register', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/register', [StudentController::class, 'store'])->name('student.store');

ROute::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
ROute::patch('/students/{student}', [StudentController::class, 'update'])->name('student.update');
ROute::delete('/students/{student}', [StudentController::class, 'destroy'])->name('student.destroy');