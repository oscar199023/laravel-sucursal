<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categoria';
    public $timestamps = false;

    public function productos() {
        return $this->hasMany('App\Models\Producto');
    }
    
}
