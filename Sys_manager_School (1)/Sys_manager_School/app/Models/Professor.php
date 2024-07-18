<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'date_de_naissance',
        'adresse',
        'nom_prenom',
        'cin',
        'filiere',
        'department'
    ];}
