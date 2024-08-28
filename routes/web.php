<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [UserController::class, 'index'])->name('user.all');

Route::get('add-user', [UserController::class, 'addUser'])->name('user.add');

Route::post('add-user', [UserController::class, 'store'])->name('user.store');

Route::get('edit-user/{id}', [UserController::class, 'editUser'])->name('user.edit');

Route::post('update-user/{id}', [UserController::class, 'updateUser'])->name('user.update');

Route::get('delete-user/{id}', [UserController::class, 'deleteUser'])->name('user.delete');

Route::get('show-users', [UserController::class, 'showUsers'])->name('user.show');

Route::get('about-app', [UserController::class, 'aboutApp'])->name('user.about');

Route::get('contact', [UserController::class, 'contact'])->name('user.contact');

