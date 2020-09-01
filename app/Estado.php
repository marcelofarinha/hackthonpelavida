<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    protected $guarded = [];
    protected $table = 'estado';
    protected $primaryKey = 'IDEstado';
    use SoftDeletes;
}
