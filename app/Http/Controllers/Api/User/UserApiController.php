<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Job\Repositories\Api\BaseRepository;
use App\Job\Repositories\Api\DistributorDetailRepository;
use App\Job\Repositories\Api\User\UserApiRepository;
use App\Job\Services\Api\DistributorDetailService;
use App\Job\Services\Api\User\UserApiService;
use App\Job\Services\ApiValidation\DetailValidation;
//use App\Job\Repositories\Api\DistributorDetailRepository;
use Illuminate\Http\Request;

class UserApiController extends Controller
{

    /**
     * @var UserApiService
     */
    public $service;
    /**
     * @var DetailValidation
     */
    private $detailValidation;
    /**
     * @var DistributorDetailRepository
     */
    private $detailRepository;
    /**
     * @var UserApiRepository
     */
    private $user;
    /**
     * @var BaseRepository
     */
    private $baseRepository;
    /**
     * @var DistributorDetailService
     */
    private $detailService;

    /**
     * UserApiController constructor.
     * @param UserApiService $service
     */
    public function __construct(UserApiService $service, DetailValidation $detailValidation,DistributorDetailRepository $detailRepository, UserApiRepository $user,
                                DistributorDetailService $detailService, BaseRepository $baseRepository)
    {
        $this->service = $service;
        $this->detailValidation = $detailValidation;
        $this->detailRepository = $detailRepository;
        $this->user = $user;
        $this->baseRepository = $baseRepository;
        $this->detailService = $detailService;
    }

    /**
     * @param Request $request
     * @return string
     */
    public function showLogin(Request $request)
    {
        $data = $request->all();

        $response = $this->service->login($data);

        return response()->json($response);

    }

    public function createUser(Request $request)
    {
        $data = $request->all();

        $t = $this->detailValidation->check($data);

        if ($t != null) {
            return $t;
        }

        $response = $this->detailService->createDetailService($data);
//        dd($data);

        return response()->json($response);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getId($id, Request $request)
    {
        $id = $this->service->getServiceId($id, $request);

        return response()->json($id);
    }
}
