<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
      protected $fillable = [
        'titulo',
        'descripcion',
        'precio',
        'instructor_id',
        'category_id',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
     public function users()
    {
        return $this->belongsToMany(User::class ,'course_users','user_id','course_id')
        ->withPivot('progreso', 'completado');  
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
     public function payments()
    {
        return $this->hasMany(Payment::class);
    }
     
      public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    
}
