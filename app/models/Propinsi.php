<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Propinsi extends Model
{
    //
    protected $table = 'propinsi';
    protected $primaryKey = 'id_propinsi';
    protected $fillable = ['id_propinsi','propinsi'];
}
