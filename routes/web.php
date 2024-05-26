<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\BudgetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'index']);
Route::get('/mark-answered', [BudgetController::class, 'mark_answered'])->middleware(['auth', 'verified'])->name('budget.mark_answered');

Route::get('/dashboard', [NavigationController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [ProfileController::class, 'logout'])->name('user.logout');
});


Route::prefix('orcamento')->group(function () {
    Route::get('/', [BudgetController::class, 'new'])->name('budget.new');
    Route::post('/', [BudgetController::class, 'store'])->name('budget.store');
    Route::get('/list', [BudgetController::class, 'index'])->middleware(['auth', 'verified'])->name('budget.index');
});

require __DIR__.'/auth.php';
