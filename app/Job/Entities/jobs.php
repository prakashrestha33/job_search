<?php

namespace App\Job\Entities;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    public $table = 'jobs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'company_name', 'name', 'opening',
        'short_description', 'total_description', 'requirement', 'salary',
        'education', 'experience', 'job_location', 'working_hours','job_display_duration','job_status'
    ];


}
