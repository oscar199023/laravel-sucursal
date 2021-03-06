<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursal';
    public $timestamps = false;
    
    public function sucursales_productos() {
        return $this->hasMany('App\Models\Sucursal_Producto');
    }

    public function comuna() {
        return $this->belongsTo('App\Models\Comuna');
    }

}
