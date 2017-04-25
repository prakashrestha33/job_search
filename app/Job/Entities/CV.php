<?php

namespace App\Job\Entities;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    public $table = 'c_vs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'contact', 'qualification', 'experience',
        'achivement', 'expertise',
    ];

}
