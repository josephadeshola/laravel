<?php

use App\Http\Controllers\NoteappController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return ('welcome laravel');
});

Route::get("/index",[UserController::class, 'index']);

Route::post("/register", [UserController::class, 'register']);

Route::get("/note", [NoteappController::class, 'showNote']);

Route::post("/noteapp_process", [NoteappController::class, 'addNote']);

Route::get("/displaynote", [NoteappController::class, 'displaynote']);

// Route::get("/displaystudent", [NoteappController::class, 'displaystudent']);

Route::get("/viewnote/{id}", [NoteappController::class, 'show']);

Route::get("/displaynote/edit/{id}", [NoteappController::class, 'edit']);

Route::post("/displaynote/edit/{id}", [NoteappController::class, 'update']);

Route::post("/displaynote/delete/{id}", [NoteappController::class, 'delete']);

Route::resource('/student', StudentController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
