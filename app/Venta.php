<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_vendedor',
        'id_cliente',
        'id_sucursal',
        'fecha_venta',
        'monto_total',
    ];

    public function vendedor ()
    {
        return $this->belongsTo(Vendedor::class, 'id_vendedor');
    }

    public function cliente ()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function sucursal ()
    {
        return $this->belongsTo(Sucursal::class, 'id_sucursal');
    }

    public function detalles_venta ()
    {
        return $this->hasMany(DetalleVenta::class, 'id_venta');
    }
}
