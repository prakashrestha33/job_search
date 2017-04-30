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

    public function getalljob()
    {
        $ans = $this->jobApiRepository->getJobs();
        if ($ans==null){
            $query = [

                "error"  => true,
                "message" => "oops !!! user not valid"

            ];

            return $query;
        }

        $data=[];
        $data['error'] = false;
        $data['message'] = "job list successfully retrieved";

        foreach ($ans as $list){
            $data["jobs"][]=[
                "id" => $list->id,
                "name"=>$list->name,
                "description"=>$list->short_description,
                "brief_description"=>$list->total_description,
                "salary"=>$list->salary,
                "experience"=>$list->experience,
                "job_location"=>$list->job_location,
                "working_hours"=>$list->working_hours,
            ];
        }

        return $data;
    }

    public function userhistory($id)
    {

        $ans = $this->jobApiRepository->getUserapplied($id);
        if ($ans==null){
            $query = [
                "error"  => true,
                "message" => "No Job Applied so far"
            ];
            return $query;
        }
        $data=[];
        $data['error'] = false;
        $data['message'] = "User History successfully retrieved";

        foreach ($ans as $list){
            $data["jobs"][]=[
                "id" => $list->id,
                "name"=>$list->name,
                "description"=>$list->short_description,
                "brief_description"=>$list->total_description,
                "salary"=>$list->salary,
                "experience"=>$list->experience,
                "job_location"=>$list->job_location,
                "working_hours"=>$list->working_hours,
            ];
        }
        return $data;

    }


}