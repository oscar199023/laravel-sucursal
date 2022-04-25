<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'producto';
    public $timestamps = false;

    public function categoria() {
        return $this->belongsTo('App\Models\Categoria');
    }

    public function sucursal_producto() {
        return $this->hasMany('App\Models\Sucursal_Producto');
    }
}
