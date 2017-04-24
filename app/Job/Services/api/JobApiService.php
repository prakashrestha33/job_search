<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 4/24/17
 * Time: 7:24 AM
 */

namespace App\Job\Services\api;


use App\Job\Repositories\api\JobApiRepository;

class JobApiService
{

    /**
     * @var JobApiRepository
     */
    private $jobApiRepository;

    public function __construct(JobApiRepository $jobApiRepository)
    {
        $this->jobApiRepository = $jobApiRepository;
    }

    public function applyjob($data)
    {
        $ans = $this->jobApiRepository->jobalready($data);
        if ($ans ==null){
            $user  = $this->jobApiRepository->applyJob($data);
            if ($user == null) {
                $data = [
                    "error" => true,
                    "message" => "Cannot apply for job"
                ];
                return $data;
            }
            $data = [
                "error" => false,
                "message" => "Job applied Successfully",
            ];
            return $data;
        }
        else {
            $resp = [
                'error'=>false,
                'message' => 'Job already applied',
            ];
            return $resp;
        }
    }


}