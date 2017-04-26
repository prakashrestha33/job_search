<?php

namespace App\Http\Controllers\api;

use App\Job\Services\api\JobApiService;
use App\Job\Services\JobService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    /**
     * @var JobService
     */
    private $jobService;
    /**
     * @var JobApiService
     */
    private $jobApiService;


    /**
     * UserController constructor.
     * @param JobService $jobService
     * @param JobApiService $jobApiService
     */
    public function __construct(JobService $jobService,JobApiService $jobApiService)
    {

        $this->jobService = $jobService;
        $this->jobApiService = $jobApiService;
    }

    public function joblist(){

       $result=$this->jobApiService->getalljob();
        return response()->json($result);
    }
    public function jobdetail($id){

       $result=$this->jobService->getjobbyId($id);
        return response()->json($result);
    }

    public function apply(Request $request){
        $data = $request->all();
        $result = $this->jobApiService->applyjob($data);
        return response()->json($result);
    }




}
