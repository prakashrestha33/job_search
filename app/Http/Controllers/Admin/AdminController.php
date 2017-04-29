<?php
/**
 * Created by PhpStorm.
 * User: nimesh
 * Date: 3/13/17
 * Time: 1:10 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Job\Services\JobSeekerService;
use App\Job\Services\JobService;

class AdminController extends Controller
{
    /**
     * @var JobSeekerService
     */
    private $jobSeekerService;
    /**
     * @var JobService
     */
    private $jobService;


    public function __construct(JobSeekerService $jobSeekerService, JobService $jobService)
    {
        $this->middleware('auth:admin');
        $this->jobSeekerService = $jobSeekerService;
        $this->jobService = $jobService;
    }

    public function index()
    {
        $jobno=$this->jobService->getalljob();
        $jobseekerno=$this->jobSeekerService->getalljobseeker();
        return view('admin.dashboard',compact('jobno','jobseekerno'));
    }
    public function jobseekers()
    {
   $jobseeker=$this->jobSeekerService->getalljobseeker();
        return view('admin.jobseekers',compact('jobseeker'));
    }
    public function jobapplied()
    {
        $jobapplied=$this->jobSeekerService->getjobseekerapplied();
        return view('admin.job.jobapplied',compact('jobapplied'));
    }

    public function cv($id)
    {
        $cvs=$this->jobSeekerService->getcvByjobseekerId($id);
        return view('admin.cv',compact('cvs'));
    }
}