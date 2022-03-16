<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;

    public function escalafon()
    {
        return $this->belongsTo('App\Models\escalafon');
    }

    public function grado()
    {
        return $this->belongsTo('App\Models\Grado');
    }

    public function arma(){
        return $this->belongsTo('App\Models\arma');
    }

    public function especialidad()
    {
        return $this->belongsTo('App\Models\especialidad');
    }

    public function extension()
    {
        return $this->belongsTo('App\Models\Extension');
    }

    public function sexo()
    {
        return $this->belongsTo('App\Models\Sexo');
    }

    public function estadocivil()
    {
        return $this->belongsTo('App\Models\EstadoCivil');
    }   
    
    public function vacacion(){
        return $this->hasOne('App\Models\vacacion');
    }

    public function salida_vac_lics(){
        return $this->hasMany('App\Models\Salida_vac_lic');
    }
}