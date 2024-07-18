<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    protected $fillable = ['content', 'student_id'];

    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
