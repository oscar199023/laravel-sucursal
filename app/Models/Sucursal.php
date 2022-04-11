<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    
    public function productos() {
        return $this->hasMany('App\Models\Producto');
    }

    public function comuna() {
        return $this->belongsTo('App\Models\Comuna');
    }

}
