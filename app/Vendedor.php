<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';
    protected $primaryKey = 'id';

    protected $fillable = [
        'rut_ven',
        'nombre_ven',
        'apellido_ven',
        'dir_ven',
        'tel_ven',
        'fecha_na_ven',
        'email_ven',
        'pais_ven',
    ];

    public function ventas ()
    {
        return $this->hasMany(Venta::class, 'id_vendedor');
    }



}
