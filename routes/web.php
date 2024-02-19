<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

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


Route::get('/employee',[employeeController::class, 'index'])->name('employee.index');

Route::get('/employee/create',[employeeController::class, 'create'])->name('employee.create');   

Route::post('/employee' ,[employeeController::class, 'store'])->name('employee.store');