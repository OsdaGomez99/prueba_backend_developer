<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalles_ventas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_venta',
        'id_producto',
        'cantidad',
        'precio_unitario',
        'subtotal',
    ];

    public function venta ()
    {
        return $this->belongsTo(Venta::class, 'id_venta');
    }

    public function producto ()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
