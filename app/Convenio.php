<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class convenio extends Model
{
    protected $guarded = [];
    protected $table = 'convenio';
    protected $primaryKey = 'IDConvenio';
    use SoftDeletes;
}

