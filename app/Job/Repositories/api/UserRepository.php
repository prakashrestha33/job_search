<?php

namespace App\Job\Repositories\api;
use App\Job\Entities\CV;
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
     * @var CV
     */
    private $CV;


    /**
     * UserRepository constructor.
     */
    public function __construct(User $user,CV $CV)
    {
        $this->user = $user;
        $this->CV = $CV;
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
            'cv_status'=> false,
            'password'=>bcrypt($data['password']),
        ];

        $user = $this->user->create($data);
        if (is_null($user)){
            return null;
        }
        return $user->first();
    }

    public function storeCV($data)
    {
        $cv = $this->CV->create($data);
        if (is_null($cv)){
            return null;
        }
        return $cv->first();
    }

    public function updateStatus($user_id)
    {
        $query = User::find($user_id);
        $query->cv_status = true;
        $query->update();
        if (is_null($query)){
            return null;
        }
        return $query->first();

    }

    public function isCVExits($data)
    {
        $query = CV::where('user_id',$data['user_id'])->first();
        if ($query == null){
            return null;
        }
        return $query;
    }

    public function getcv($id)
    {
        return $this->CV->select('*')->where('user_id', $id)->first();
    }

}