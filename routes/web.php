<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/about', function () {
    return view('admin.about');
})->name('admin.about');


Route::prefix('admin')
    ->group(function () {
        // STUDENT
        Route::get('/student', [StudentController::class, 'index'])
            ->name('admin.student.index');
        });
