<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'archivo', 'user_id', 'asignatura_id','curso'
    ];
}
