<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['description', 'date', 'student_id'];
    public $timestamps = false;

    public function student()
    {
        
        return $this->belongsTo(User::class, 'student_id');
    }
}
