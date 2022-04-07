<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distritos extends Model
{
    use HasFactory;
    public function relPersonas(){
        return $this->hasMany(Personas::class, 'persona');
    }
    public function relDistritos(){
        return $this->hasMany(Distritos::class, 'distrito');
    }
}    
