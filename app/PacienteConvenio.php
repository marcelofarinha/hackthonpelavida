<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PacienteConvenio extends Model
{
    protected $guarded = [];
    protected $table = 'pacienteconvenio';
    //protected $primaryKey = 'IDPaciente';
    use SoftDeletes;
}
