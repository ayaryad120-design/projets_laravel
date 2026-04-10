<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    protected $fillable = ['nom', 'email', 'telephone'];

    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }
}
