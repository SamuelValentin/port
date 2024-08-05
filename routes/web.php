<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectPublicController;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/project', [ProjectPublicController::class, 'index'])->name('project');
Route::get('/project/{id}', [ProjectPublicController::class, 'projectDetails'])->name('project.details');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        $projects = Project::take(3)->get();
        $categories = Category::take(3)->get();
        return view('dashboard.dashboard', compact('projects', 'categories'));
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/categories/add', [CategoriesController::class, 'add'])->name('categories.add');
    Route::post('/categories/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/categories/editar/{id}', [CategoriesController::class, 'edit'])->name('categories.editar');
    Route::post('/categories/atualizar/{id}', [CategoriesController::class, 'update'])->name('categories.atualizar');

    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('/projects/add', [ProjectsController::class, 'add'])->name('projects.add');
    Route::post('/projects/store', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/projects/editar/{id}', [ProjectsController::class, 'edit'])->name('projects.editar');
    Route::post('/projects/atualizar/{id}', [ProjectsController::class, 'update'])->name('projects.atualizar');
});

require __DIR__.'/auth.php';
