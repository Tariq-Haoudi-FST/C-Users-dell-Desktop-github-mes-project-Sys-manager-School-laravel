<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = ['justification_reason', 'student_id'];
    public $timestamps = false;
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
