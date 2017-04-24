<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 4/22/17
 * Time: 9:04 PM
 */

namespace App\Job\Services;


use App\Job\Repositories\JobRepository;

class JobService
{
    /**
     * @var JobRepository
     */
    private $jobRepository;

    public function __construct(JobRepository $jobRepository)
  {

      $this->jobRepository = $jobRepository;
  }

    public function storeJob($data)
    {
        $data = array_except($data, ['_token', 'to', 'remove']);

        return $this->jobRepository->storesJobs($data);

    }

    public function getalljob()
    {
        return $this->jobRepository->getallJobs();

    }

    public function getjobbyId($id)
    {
        return $this->jobRepository->getJobbyId($id);
    }

    public function updatejob($request, $id)
    {
        return $this->jobRepository->updateJob($request,$id);
    }



}