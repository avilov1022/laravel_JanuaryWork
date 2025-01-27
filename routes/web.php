<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [ReportController::class, 'index']) -> name('reports.index');
    Route::get('/create', [ReportController::class, 'create']) -> name('reports.create');
    Route::post('/store', [ReportController::class, 'store']) -> name('reports.store');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware((Admin::class))->group(function(){
    Route::get('/admin', [AdminController::class, 'index']) -> name('admin.index');
    Route::get('/admin/reports', [AdminController::class, 'index']) -> name('admin.showReports');
});

require __DIR__.'/auth.php';
