<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'nombre_completo', 'email', 'user_id', 'comentario', 'is_registered_user'
    ];
}
