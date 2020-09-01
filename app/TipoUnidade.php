<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoUnidade extends Model
{
    protected $guarded = [];
    protected $table = 'tipounidade';
    //protected $primaryKey = 'IDTipo';
    use SoftDeletes;
}
