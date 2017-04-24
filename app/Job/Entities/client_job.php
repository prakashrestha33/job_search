<?php

namespace App\Job\Entities;

use Illuminate\Database\Eloquent\Model;

class client_job extends Model
{
    public $table = 'client_jobs';


    protected $fillable = [
        'user_id', 'job_id',
    ];

}
