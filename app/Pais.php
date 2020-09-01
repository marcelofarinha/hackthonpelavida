<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pais extends Model
{
    protected $guarded = [];
    protected $table = 'pais';
    protected $primaryKey = 'IDPais';
    use SoftDeletes;
}
