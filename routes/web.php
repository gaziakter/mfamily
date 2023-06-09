<?php

use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(IncomeCategoryController::class)->group(function () {
    Route::get('/add/income/category', 'AddIncomeCagetory')->name('add.income.category');
    Route::post('/store/income/category', 'StoreIncomeCagetory')->name('store.income.category');
    Route::get('/All/income/category', 'AllIncomeCagetory')->name('all.income.category');
    Route::get('/edit/income/category/{id}', 'EditIncomeCagetory')->name('edit.income.category');
    Route::post('/update/income/category', 'UpdateIncomeCagetory')->name('update.income.category');
    Route::get('/delete/income/category/{id}', 'DeleteIncomeCagetory')->name('delete.income.category');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
