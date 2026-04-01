<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class Groupe extends Model
{
    protected $fillable=[
        'nom'
    ];

    public function etudiants(){
        return $this->hasMany(Etudiant::class);
    }
}
