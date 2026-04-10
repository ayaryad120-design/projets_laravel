<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = ['marque', 'modele', 'annee', 'proprietaire_id'];

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
}
