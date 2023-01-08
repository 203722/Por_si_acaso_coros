<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    use HasFactory;

    public function fechas(){
        return $this->hasMany(Fecha::class);
    }

    public $timestamps = false;
}
