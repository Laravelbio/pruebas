<?php

namespace App\Supervisor;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $table = 'supervisors';
    protected $fillable = ['nombres',];
}
