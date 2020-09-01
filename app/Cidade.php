<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    protected $guarded = [];
    protected $table = 'cidade';
    protected $primaryKey = 'IDCidade';
    use SoftDeletes;
}
