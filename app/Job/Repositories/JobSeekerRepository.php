<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 4/18/17
 * Time: 12:01 AM
 */

namespace App\Job\Repositories;


use App\User;

class JobSeekerRepository
{

    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {

        $this->user = $user;
    }


    public function getalljobseekers()
    {
        return $this->user->select('*')->get();
    }
}