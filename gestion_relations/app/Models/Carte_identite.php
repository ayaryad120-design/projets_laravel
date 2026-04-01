<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Carte_identite extends Model
{
    protected $fillable = ['numero', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    
}

