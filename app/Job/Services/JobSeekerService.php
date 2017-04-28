<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/22/17
 * Time: 8:46 PM
 */

namespace App\Job\Services;



use App\Job\Repositories\JobSeekerRepository;

class JobSeekerService
{
    /**
     * @var JobSeekerRepository
     */
    private $jobSeekerRepository;

    public function __construct(JobSeekerRepository $jobSeekerRepository)
    {

        $this->jobSeekerRepository = $jobSeekerRepository;
    }

    public function getalljobseeker()
    {
        return $this->jobSeekerRepository->getalljobseekers();
    }

    public function getjobseekerapplied()
    {
        return $this->jobSeekerRepository->getjobseekersapplied();

    }
}