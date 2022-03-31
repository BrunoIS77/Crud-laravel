<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'email', 'ciudad', 'distrito'];
    protected $hidden = ['id'];
}