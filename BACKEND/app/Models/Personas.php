<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'email', 'ciudad', 'distrito'];
    protected $hidden = ['id'];

    public function relCiudades(){
        return $this->belongsTo(Ciudades::class, 'ciudad');
    }
    public function relDistritos(){
        return $this->belongsTo(Ciudades::class, 'ciudad');
    }

}