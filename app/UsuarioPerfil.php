<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioPerfil extends Model
{
    protected $guarded = [];
    protected $table = 'usuarioperfil';
    //protected $primaryKey = 'IDUsuario';
    use SoftDeletes;
}
