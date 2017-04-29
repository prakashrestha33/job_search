<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 4/18/17
 * Time: 12:01 AM
 */

namespace App\Job\Repositories;


use App\Job\Entities\client_job;
use App\Job\Entities\CV;
use App\User;

class JobSeekerRepository
{

    /**
     * @var User
     */
    private $user;
    /**
     * @var client_job
     */
    private $client_job;
    /**
     * @var CV
     */
    private $CV;

    public function __construct(User $user,client_job $client_job,CV $CV)
    {

        $this->user = $user;
        $this->client_job = $client_job;
        $this->CV = $CV;
    }


    public function getalljobseekers()
    {
        return $this->user->select('*')->get();
    }

    public function getjobseekersapplied()
    {
        return $this->client_job->select('users.*','jobs.name as jobname')
            ->join('users','users.id','client_jobs.user_id')
            ->join('jobs','jobs.id','client_jobs.job_id')
            ->get();

    }

    public function getcvbyjobseekerid($id)
    {
        $t=$this->CV->select('*')->where('user_id',$id)->first();
//        dd($t);
        return $t;
    }
}