<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PacienteExame extends Model
{
    protected $guarded = [];
    protected $table = 'pacienteexame';
    //protected $primaryKey = 'IDPaciente';
    use SoftDeletes;
}
