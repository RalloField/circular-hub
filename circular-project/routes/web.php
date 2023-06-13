<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CompanyController;
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

Route::get('/circular', function () {
    return view('circularwhat.show', [
        'circular' => '<h1>Circular</h1>'
    ]);
});

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/create-projects', [ProjectController::class, 'create'])->name('project-form');

Route::post('/create-project', [ProjectController::class, 'store'])->name('create-project');

Route::delete('/delete-project/{id}', [ProjectController::class, 'delete'])->name('delete-project');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

Route::get('/register', [UserController::class, 'create'])->name('register');
