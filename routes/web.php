<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Models\Blog;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/form',[FormController::class,'form'])->name('form');
Route::post('/store',[FormController::class,'store'])->name('store');
Route::get('/table',[FormController::class,'table'])->name('table');
Route::get('/edit/{id}',[FormController::class,'edit'])->name('edit');
Route::post('/update/{id}',[FormController::class,'update'])->name('update');
Route::get('/destroy/{id}',[FormController::class,'destroy'])->name('destroy');
Route::get('/contact',[FormController::class,'contact'])->name('contact');
Route::get('/home',[FormController::class,'home'])->name('home');
Route::get('/about',[FormController::class,'about'])->name('about');


// for categories
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/table',[categoryController::class,'table'])->name('category.table');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');


// for blog

Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('/blog/table',[BlogController::class,'table'])->name('blog.table');
Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
