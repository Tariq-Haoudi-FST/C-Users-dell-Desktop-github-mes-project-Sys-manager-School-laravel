<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
        public $timestamps = false;

    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class);
    }
}
