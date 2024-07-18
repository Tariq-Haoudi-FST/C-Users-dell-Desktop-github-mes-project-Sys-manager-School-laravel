<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = ['filiere','department', 'Image', 'student_id'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
