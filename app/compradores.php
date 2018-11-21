<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compradores extends Model
{
    protected $fillable = [
        'name', 'apellido', 'direccion',
    ];
}
