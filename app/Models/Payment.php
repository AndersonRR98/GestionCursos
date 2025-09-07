<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

       protected $fillable = [
        'monto',
        'metodo_pago',
        'estado',
        'user_id',
        'course_id',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }

      public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
