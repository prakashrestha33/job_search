<?php

namespace App\Http\Controllers\api;

use App\Job\Services\api\UserServiceApi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var UserServiceApi
     */
    private $serviceApi;

    /**
     * UserController constructor.
     */
    public function __construct(UserServiceApi $serviceApi)
    {
        $this->serviceApi = $serviceApi;
    }

    public function login(Request $request){
        $data = $request->all();
        $result = $this->serviceApi->getUsers($data);
        return response()->json($result);
    }

    public function register(Request $request){
        $data=$request->all();
        $result = $this->serviceApi->registerData($data);
        return response()->json($result);

    }
}
