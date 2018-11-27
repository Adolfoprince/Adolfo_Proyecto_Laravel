<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'name_comprador', 'name', 'descripcion', 'fabricante',
    ];
}
