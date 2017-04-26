<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 4/24/17
 * Time: 7:27 AM
 */

namespace App\Job\Repositories\api;


use App\Job\Entities\client_job;
use App\Job\Entities\jobs;

class JobApiRepository
{

    /**
     * @var client_job
     */
    private $client_job;

    public function __construct(client_job $client_job)
    {

        $this->client_job = $client_job;
    }

    public function applyJob($data)
    {
        $data = [
            'user_id'=>$data['user_id'],
            'job_id'=> $data['job_id'],
        ];

        $applied = $this->client_job->create($data);
        if (is_null($applied)){
            return null;
        }
        return $applied->first();
    }

    public function jobalready($data)
    {
        $query = client_job::where('user_id',$data['user_id'])->where('job_id',$data['job_id'])->first();
        if ($query == null){
            return null;
        }
        return $query;
    }

    public function getJobs()
    {
        $query = jobs::select('*')->get();
        if (is_null($query)){
            return null;
        }
        return $query;
    }


}