<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PacienteComorbidade extends Model
{
    protected $guarded = [];
    protected $table = 'pacientecomorbidade';
    //protected $primaryKey = 'IDPaciente';
    use SoftDeletes;
}
