<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialIssue extends Model
{
    protected $fillable = ['description', 'status', 'student_id'];
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
