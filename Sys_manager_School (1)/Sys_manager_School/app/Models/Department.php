<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
        public $timestamps = false;

    public function roomSchedules()
    {
        return $this->hasMany(RoomSchedule::class);
    }
}
