<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonitoramentoSinal extends Model
{
    protected $guarded = [];
    protected $table = 'monitoramentosinal';
    //protected $primaryKey = 'IDMonitoramento';
    use SoftDeletes;
}
