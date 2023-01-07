<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubmoduleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('/module', ModuleController::class);
    Route::resource('/hosting', HostingController::class);
    Route::resource('/api', ApiController::class);
    Route::resource('/module/{module}/submodule', SubmoduleController::class);

    Route::get('/submodule/ajax/{module_id}', [SubmoduleController::class, 'getSubModule']);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';