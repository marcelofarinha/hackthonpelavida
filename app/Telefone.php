<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Telefone extends Model
{
    protected $guarded = [];
    protected $table = 'telefone';
    protected $primaryKey = 'IDTelefone';
    use SoftDeletes;
}
