<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'id';

    protected $fillable = [
        'rut_prov',
        'nombre_prov',
        'apellido_prov',
        'dir_prov',
        'tel_prov',
        'pais_prov',
        'pagina_web'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_proveedor');
    }
}
