<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'nombre_p',
        'precio_p',
        'talla_p',
        'stock_p'
    ];

    // Relación con ventas (un producto puede estar en muchas ventas)
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id_producto');
    }
}
