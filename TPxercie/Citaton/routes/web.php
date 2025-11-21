<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CitationController;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\UserController;




Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/citation', [CitationController::class, 'index'])->middleware('auth');
Route::get('/citation-gestion', [CitationController::class, 'gestion'])->middleware('auth');

//Auth Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/save', [RegisterController::class, 'store'])->name('save')->middleware('guest');

Route::get('/login', [SessionsController::class, 'index'])->name('login');
Route::post('/login', [SessionsController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/logout', [SessionsController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('auth');


Route::get('/create-citation', [CitationController::class, 'create'])->middleware('auth');
Route::post('/store-citation', [CitationController::class, 'store'])->middleware('auth');


Route::get('/citation/{citation}/edit', [CitationController::class, 'edit'])->middleware('auth');
Route::patch('/citation/{citation}/edit', [CitationController::class, 'update'])->middleware('auth');



Route::get('/gestion-user', [UserController::class, 'index'])->name('gestion.user')->middleware('auth');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');





Route::middleware(['role:auteur,admin'])->group(function () {
    
    Route::get('/citations/create', [CitationController::class, 'create'])->name('citations.create');
    
    Route::post('/citations', [CitationController::class, 'store'])->name('citations.store');
    Route::delete('/citation/{citation}/delete', [CitationController::class, 'delete'])->middleware('auth');
});


Route::middleware(['role:admin'])->group(function () {

    
    Route::patch('/admin/user/{user}/role', [UserController::class, 'updateRole'])->middleware('auth');

    Route::delete('/admin/user/{user}/delete', [UserController::class, 'delete'])->middleware('auth');
});


    
 

