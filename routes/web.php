<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneBookController;
use App\Http\Controllers\CategoriesController;


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
   return view('auth.login');
});

// // Route::post('contact/store' , [PhoneBookController::class , 'store']);
// Route::match(['get', 'post'],'contact/store', [PhoneBookController::class , 'store']);
// Route::get('destroy/{$id}', 'PhoneBookController@destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::resource('Categories', App\Http\Controllers\CategoriesController::class);
// Route::post('  ', [App\Http\Controllers\ CategoriesController::class, 'store'])->name('store');
// Route::get('/categories', [App\Http\Controllers\ CategoriesController::class, 'index'])->name('categories');
// Route::get('/create', [App\Http\Controllers\ CategoriesController::class, 'create'])->name('categories.create');
// Route::put('/update/{category}', [App\Http\Controllers\ CategoriesController::class, 'update'])->name('update');
// Route::get('/show', [App\Http\Controllers\ CategoriesController::class, 'show'])->name('show');
// Route::get('/destroy', [App\Http\Controllers\ CategoriesController::class, 'destroy'])->name('destroy');
// Route::get('/edit/{category}', [App\Http\Controllers\ CategoriesController::class, 'edit'])->name('edit');



