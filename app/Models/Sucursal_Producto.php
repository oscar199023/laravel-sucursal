<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    public function sucursal() {
        return $this->belongsTo('App\Models\Sucursal');
    }    

    public function producto() {
        return $this->belongsTo('App\Models\Producto');
    }

}
