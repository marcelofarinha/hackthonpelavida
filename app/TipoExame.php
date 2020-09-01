<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoExame extends Model
{
    protected $guarded = [];
    protected $table = 'tipoexame';
    //protected $primaryKey = 'IDTipo';
    use SoftDeletes;
}
