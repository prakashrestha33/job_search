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
        'user_id', 'cv_image',
    ];

}
