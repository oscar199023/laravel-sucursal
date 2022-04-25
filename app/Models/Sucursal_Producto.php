<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal_Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursal_producto';
    public $timestamps = false;
    
    public function sucursal() {
        return $this->belongsTo('App\Models\Sucursal');
    }    

    public function producto() {
        return $this->belongsTo('App\Models\Producto');
    }

}
