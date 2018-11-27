<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $fillable = [
        'name_producto', 'tipo_pago',
    ];
}
