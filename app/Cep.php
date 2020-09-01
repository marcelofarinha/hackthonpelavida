<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cep extends Model
{
    protected $guarded = [];
    protected $table = 'cep';
    protected $primaryKey = 'IDCep';
    use SoftDeletes;
}

