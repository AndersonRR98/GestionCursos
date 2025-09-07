<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Course;
use App\Models\Publication;
use App\Models\Comment;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Lesson;
use App\Models\ChatSupport;

class OrmController extends Controller
{
     // 1. Traer todos los usuarios con su rol y publicaciones
    public function usersRelations()
    {
        $users = User::with([
            'role',
            'comments',
            'payments',
            'course',
        ])->get();

        return response()->json($users);
    }

    // 2. Traer todas las publicaciones con seller, categoría, comentarios e imágenes
    public function courseRelations()
    {
        $courses = Course::with([
            'category',
            'users',
            'lessons',
            'payments',
            'comments.user'
        ])->get();

        return response()->json($courses);
    }


    // // 3. Traer todos los sellers con sus publicaciones e imágenes
       public function categoryRelations()
       {
         $categories =Category::with([

              'courses.comments.user',
             
         ])->get();

          return response()->json($categories);
     }

    // // 4. Traer todos los comentarios con su usuario y publicación
     public function commentsRelations()
     {
         $comments = Comment::with([
             'user',
             'commentable'
         ])->get();

         return response()->json($comments);
     }

    // // 5. Trae 
     public function lessonRelations()
     {
         $lessons = Lesson::with([
            'course',
             'comments.user',
         ])->get();

         return response()->json($lessons);
     }

    // // 6. trae todos los pagos con usuario y curso 
     public function paymentsRelations()
     {
         $payments = Payment::with([
            'user',
            'course',
         ])->get();
         return response()->json($payments);
     }

    // // 7. usuarios con roles 
     public function rolesRelations()
     {
         $roles = Role::with([
            'users'
             ])->get(); 
         return response()->json($roles);
     }
}
