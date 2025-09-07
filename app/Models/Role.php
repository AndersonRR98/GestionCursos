<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

     protected $fillable = [
        'nombre',
        'permisos',
        
    ];

      public function users()
    {
        return $this->hasMany(User::class , 'rol_id'); // se pone la clave foranea porque laravel no la detecto solo si no la detecta se pone en los dos modelos 
    }
}
