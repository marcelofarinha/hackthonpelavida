<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monitoramento extends Model
{
    protected $guarded = [];
    protected $table = 'monitoramento';
    protected $primaryKey = 'IDMonitoramento';
    use SoftDeletes;
}
