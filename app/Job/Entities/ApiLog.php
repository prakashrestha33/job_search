<?php

namespace App\Job\Entities;

use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    public $table = 'api_logs';

    public $fillable = [
        'data',
        'api_token'
    ];
}
