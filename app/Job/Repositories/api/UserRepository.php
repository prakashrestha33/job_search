<?php

namespace App\Job\Repositories\api;
use App\User;
use App\UserStrings;

/**
 * Created by PhpStorm.
 * User: sawrose
 * Date: 4/22/17
 * Time: 8:24 AM
 */
class UserRepository
{
    /**
     * @var User
     */
    private $user;


    /**
     * UserRepository constructor.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function checkData($data)
    {
        $result = User::where("email",$data['email'])->first();
        if (is_null($result))
        {
            return null;
        }
        return $result;
    }

    public function isUserExits($data)
    {
        $query = User::where('email',$data['email'])->first();
        if ($query == null){
            return null;
        }
        return $query;
    }

    public function registerUser($data)
    {
        $data = [
            'name'=>$data['name'],
            'email'=> $data['email'],
            'password'=>bcrypt($data['password']),
        ];

        $user = $this->user->create($data);
        if (is_null($user)){
            return null;
        }
        return $user->first();
    }

}