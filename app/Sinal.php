<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sinal extends Model
{
    protected $guarded = [];
    protected $table = 'sinal';
    protected $primaryKey = 'IDSinal';
    use SoftDeletes;
}
