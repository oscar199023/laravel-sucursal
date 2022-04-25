<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'comuna';
    public $timestamps = false;

    public function sucursals() {
        return $this->hasMany('App\Models\Sucursal');
    }

}
