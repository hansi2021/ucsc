<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\CaseListController;




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

//Home
Route::get('/', [HomeController::class, 'index']);

// Authentication
// Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin', [LoginController::class, 'adminDashboard']);
Route::post('user-login', [LoginController::class, 'userLogin']);
Route::get('user-logout', [LoginController::class, 'userLogout']);

//Admin
Route::get('/admin-client', [ClientController::class, 'index']);
Route::get('/admin-lawyer', [LawyerController::class, 'index']);
Route::get('/admin-caselist', [CaseListController::class, 'index']);



