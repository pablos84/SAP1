<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arma extends Model
{
    use HasFactory;

    public function persona(){
        return $this->hasOne('App\Models\Persona');
    }
}
