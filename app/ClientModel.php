<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'name';
    protected $keyType = 'string';
}
