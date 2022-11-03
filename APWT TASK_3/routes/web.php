<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'loggedIn'])->name('loginPost');

Route::get('/registration',[RegController::class, 'registration'])->name('registration');
Route::post('/registration',[RegController::class, 'managerCreateSubmitted'])->name('registrationPost');
//Manager Dashboard
Route::get('/managerDash', [ManagerController::class,'managerDash'])->name('managerDash')->middleware('ValidManager');

//edit employee
Route::get('/employeeEdit/{id}', [EmployeeController::class,'employeeEdit'])->name('employeeEdit')->middleware('ValidManager');
Route::post('/employeeEdit',[EmployeeController::class, 'employeeEditSubmitted'])->name('employeeEditPost');
Route::get('/employeeDelete/{id}',[EmployeeController::class, 'employeeDelete'])->name('employeeDelete');

//Create Employee
Route::get('/employeeCreate',[EmployeeController::class, 'employeeCreate'])->name('employeeCreate')->middleware('ValidManager');
Route::post('/employeeCreate',[EmployeeController::class, 'employeeCreateSubmitted'])->name('employeeCreate2');
//Employe List
Route::get('/employeeList',[EmployeeController::class, 'employeeList'])->name('employeeList')->middleware('ValidManager');

//LOGOUT
Route::get('/logout',[LoginController::class,'logout'])->name('logout');