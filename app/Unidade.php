<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unidade extends Model
{
    protected $guarded = [];
    protected $table = 'unidade';
    protected $primaryKey = 'IDUnidade';
    use SoftDeletes;
}
