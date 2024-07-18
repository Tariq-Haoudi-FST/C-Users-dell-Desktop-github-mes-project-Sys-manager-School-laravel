<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomSchedule extends Model
{
    protected $fillable = [
        'id', 
    ];
    public $timestamps = false;

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
