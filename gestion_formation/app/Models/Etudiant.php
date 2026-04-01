<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Groupe;

class Etudiant extends Model
{
    protected $fillable=[
        'nom',
        'email',
        'groupe_id'
    ];

    function groupe(){
        return $this->belongsTo(Groupe::class);
    }
}
