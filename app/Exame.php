<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exame extends Model
{
    protected $guarded = [];
    protected $table = 'exame';
    protected $primaryKey = 'IDExame';
    use SoftDeletes;
}
