<?php

namespace App\Job\Services\api;


use App\Job\Repositories\api\UserRepository;

use Illuminate\Support\Facades\Hash;

class UserServiceApi
{
    /**
     * @var UserRepository
     */
    private $repository;


    /**
     * UserServiceApi constructor.
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getUsers($data)
    {
        $user = $this->repository->checkData($data);
        if ($user==null) {

            $query = [

                "status"  => "false",
                "message" => "oops !!! user not valid"

            ];

            return $query;
        }

        $password = Hash::check($data['password'], $user->password);
        if ($password){
            $userId = $user->id;

            $resp = [

                "status"    => "true",
                "id"        => $userId

            ];

            return $resp;
        }

        $respo = [

            "status"  => "false",
            "message" => "oops!!! password not valid."

        ];

        return $respo;
    }

    public function registerData($data)
    {
        $ans = $this->repository->isUserExits($data);
        if ($ans ==null){
            $user  = $this->repository->registerUser($data);
            if ($user == null) {
                $data = [
                    "error" => true,
                    "message" => "User Cannot be Created"
                ];
                return $data;
            }
            $data = [
                "error" => false,
                "message" => "User created Successfully",
            ];
            return $data;
        }
        else {
            $resp = [
                'error'=>false,
                'message' => 'Email already Exists',
            ];
            return $resp;
        }
    }
}