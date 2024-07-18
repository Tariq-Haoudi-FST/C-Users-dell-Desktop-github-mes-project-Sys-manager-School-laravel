<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPGroup extends Model
{
    protected $fillable = ['name', 'description', 'student_id'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
