<?php

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

Route::get('clear_cache', function () {

    \Artisan::call('optimize:clear');
    return redirect()->back()->with("success","Cache is cleared");

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
Route::get('/user_edit/{id}', [App\Http\Controllers\HomeController::class, 'user_edit'])->name('user_edit');
Route::get('/user_delete/{id}', [App\Http\Controllers\HomeController::class, 'user_delete'])->name('user_delete');
Route::get('/category', [App\Http\Controllers\HomeController::class, 'index'])->name('category');
Route::get('/amount', [App\Http\Controllers\HomeController::class, 'index'])->name('amount');
Route::get('/incomes', [App\Http\Controllers\HomeController::class, 'index'])->name('incomes');
Route::get('/expenses', [App\Http\Controllers\HomeController::class, 'index'])->name('expenses');
Route::get('/transfer', [App\Http\Controllers\HomeController::class, 'index'])->name('transfer');
Route::get('/report', [App\Http\Controllers\HomeController::class, 'index'])->name('report');
Route::get('/report', [App\Http\Controllers\HomeController::class, 'index'])->name('report');
Route::get('lang/change', [App\Http\Controllers\LangController::class, 'change'])->name('changeLang');
Route::get('home/status', [App\Http\Controllers\HomeController::class, 'status'])->name('home/status');
Route::get('myprofile', [App\Http\Controllers\HomeController::class, 'myprofile'])->name('myprofile');
Route::post('profile_update/{id}', [App\Http\Controllers\HomeController::class, 'profile_update'])->name('profile_update');



