<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table ='users';

    
    protected $fillable = [
        'nombre',
        'email',
        'password',
        'activo',
    ];

    
    public function role()
    {
        return $this->belongsTo(Role::class ,'rol_id');
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    
    public function course()
    {
        return $this->belongsToMany(Course::class ,'course_users','user_id','course_id')
        ->withPivot('progreso', 'completado');  
    }

}
