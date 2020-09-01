<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perfil extends Model
{
    protected $guarded = [];
    protected $table = 'perfil';
    protected $primaryKey = 'IDPerfil';
    use SoftDeletes;
}
