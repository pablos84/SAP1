<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida_vac_lic extends Model
{
    use HasFactory;

    public function persona(){
        return $this->belongsTo('App\Models\persona');
    }

    public function vacacion()
    {
        return $this->belongsTo('App\Models\vacacion');
    }
}