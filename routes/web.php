<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

//rutas orm consultas 
Route::get('/orm/users', [OrmController::class, 'usersRelations']);
Route::get('/orm/courses', [OrmController::class, 'courseRelations']);
Route::get('/orm/categories', [OrmController::class, 'categoryRelations']);
Route::get('/orm/comments', [OrmController::class, 'commentsRelations']);
Route::get('/orm/lessons', [OrmController::class, 'lessonRelations']);
Route::get('/orm/payments', [OrmController::class, 'paymentsRelations']);

// CRUD de courses 
Route::resource('courses', CourseController::class);