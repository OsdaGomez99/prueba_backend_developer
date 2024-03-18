<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'rut_cliente',
        'nombre_cliente',
        'apellido_cliente',
        'dir_cliente',
        'tel_cliente',
        'pais_cliente',
    ];

    public function ventas ()
    {
        return $this->hasMany(Venta::class, 'id_cliente');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

}
