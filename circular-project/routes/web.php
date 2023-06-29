<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomepageController::class, 'show'])->name('home');

Route::get('/what', [DefinitionController::class, 'show'])->name('what');

Route::get('/circular-economy', [DefinitionController::class, 'circulareconomy'])->name('definition');

Route::get('/circular-tech', [DefinitionController::class, 'circulartech'])->name('techworld');

Route::get('/circular-help', [DefinitionController::class, 'circularhelp'])->name('helpout');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/create-projects', [ProjectController::class, 'create'])->name('project-form');

Route::post('/create-project', [ProjectController::class, 'store'])->name('create-project');

Route::delete('/delete-project/{id}', [ProjectController::class, 'delete'])->name('delete-project');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

Route::get('/register-company', [CompanyController::class, 'create'])->name('register-company');

Route::post('/register-company', [CompanyController::class, 'store'])->name('register-company');

Route::get('/register', [UserController::class, 'create'])->name('register');

Route::post('/register', [UserController::class, 'store'])->name('create-user');

Route::get('/login', [SessionController::class, 'create'])->name('login-page');

Route::post('/login', [SessionController::class, 'store'])->name('login-user');

Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
