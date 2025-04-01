<?php
use App\Http\Controllers\UserController;
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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/edit/{id}', [ProfileController::class, 'editUser'])->name('profile.editUser');
    Route::delete('/profile/delete/{id}', [ProfileController::class, 'deleteUser'])->name('profile.deleteUser');
    Route::put('/profile/update/{id}', [ProfileController::class, 'updateUser'])->name('profile.updateUser');
    Route::get('/profile/edit/{id}', [ProfileController::class, 'editUser'])->name('profile.editUser');
});

require __DIR__.'/auth.php';
