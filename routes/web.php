<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index']);

Auth::routes();
// for users
Route::middleware(['auth','user-access:0'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// for admin
Route::middleware(['auth','user-access:1'])->group(function(){
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('admin/role-form', [App\Http\Controllers\HomeController::class, 'showRoleForm'])->name('admin.role.form');
    Route::post('admin/role-role', [App\Http\Controllers\HomeController::class, 'addRole'])->name('add.role');
});
