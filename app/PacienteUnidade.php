<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PacienteUnidade extends Model
{
    protected $guarded = [];
    protected $table = 'pacienteunidade';
    //protected $primaryKey = 'IDPaciente';
    use SoftDeletes;
}
