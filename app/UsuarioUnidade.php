<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioUnidade extends Model
{
    protected $guarded = [];
    protected $table = 'usuariounidade';
    //protected $primaryKey = 'IDUsuario';
    use SoftDeletes;
}
