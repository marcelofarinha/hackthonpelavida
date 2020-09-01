<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    protected $guarded = [];
    protected $table = 'paciente';
    protected $primaryKey = 'IDPaciente';
    use SoftDeletes;
}
