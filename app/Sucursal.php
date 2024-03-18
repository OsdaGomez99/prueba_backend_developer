<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    protected $primaryKey = 'id';

    protected $fillable = [
        'pais',
        'moneda',
    ];

    public function productos ()
    {
        return $this->belongsToManyMany(Producto::class, 'id_sucursal');
    }

    public function ventas ()
    {
        return $this->hasMany(Venta::class, 'id_sucursal');
    }
}
