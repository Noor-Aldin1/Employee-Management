<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentReportController;





// Route::get('/', function () {
//     return view('welcome');
// });



//--------------------- Department routes-------------
Route::get('/', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('departments', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');
Route::get('departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');




//--------------------- Employee routes-------------
Route::get('employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::get('/generate-department-report', [DepartmentReportController::class, 'generatePDF'])->name('department.report.pdf');
