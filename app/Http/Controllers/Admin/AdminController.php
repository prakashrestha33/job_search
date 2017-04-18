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

class AdminController extends Controller
{
    /**
     * @var JobSeekerService
     */
    private $jobSeekerService;


    public function __construct(JobSeekerService $jobSeekerService)
    {
        $this->middleware('auth:admin');
        $this->jobSeekerService = $jobSeekerService;
    }

    public function index()
    {
        return view('admin.dashboard');
    }
    public function jobseekers()
    {
   $jobseeker=$this->jobSeekerService->getalljobseeker();
        return view('admin.jobseekers',compact('jobseeker'));
    }
}