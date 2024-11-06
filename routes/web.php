<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;

use App\Http\Controllers\EmployeeController;





Route::get('/', function () {
    return view('welcome');
});



//--------------------- Department routes-------------
Route::resource('departments', DepartmentController::class);





//--------------------- Employee routes-------------
Route::resource('employees', EmployeeController::class);
