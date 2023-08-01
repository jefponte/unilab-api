<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Bond extends Model
{
    protected $table = 'vw_usuarios_catraca';
    public $timestamps = false;
    protected $fillable = [
        'id_usuario', 'nome'
    ];

}
