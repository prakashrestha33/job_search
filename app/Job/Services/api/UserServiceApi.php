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

                "error"  => true,
                "message" => "oops !!! user not valid"

            ];

            return $query;
        }

        $password = Hash::check($data['password'], $user->password);
        if ($password){
            $userId = $user->id;

            $resp = [

                "error"    => false,
                "id"        => $userId

            ];

            return $resp;
        }

        $respo = [

            "error"  => true,
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

    public function storecv($data)
    {
        $ans = $this->repository->isCVExits($data);
        if ($ans ==null){
            $cv = $this->repository->storeCV($data);
            if ($cv== null) {
                $data = [
                    "error" => true,
                    "message" => "User CV Cannot be Created"
                ];
                return $data;
            }
            $this->repository->updateStatus($cv->user_id);
            $data = [
                "error" => false,
                "message" => "User CV created Successfully",
            ];
            return $data;
        }
        else {
            $resp = [
                'error'=>false,
                'message' => 'CV already Exists',
            ];
            return $resp;
        }
        }
}
