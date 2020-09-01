<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnidadeTipoUnidade extends Model
{
    protected $guarded = [];
    protected $table = 'unidadetipounidade';
    //protected $primaryKey = 'IDUnidade';
    use SoftDeletes;
}
