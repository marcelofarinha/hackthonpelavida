<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comorbidade extends Model
{
    protected $guarded = [];
    protected $table = 'comorbidade';
    protected $primaryKey = 'IDComorbidade';
    use SoftDeletes;
}
