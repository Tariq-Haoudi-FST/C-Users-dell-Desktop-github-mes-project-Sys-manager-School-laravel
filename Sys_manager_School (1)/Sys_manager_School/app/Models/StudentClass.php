<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
        public $timestamps = false;
        protected $fillable = [
            'date_de_naissance',
            'adresse',
            'nom_prenom',
            'code_massar',
            'cin',
            'filiere',
        ];
    
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
