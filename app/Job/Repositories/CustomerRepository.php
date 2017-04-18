<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/22/17
 * Time: 8:48 PM
 */

namespace App\Portal\Repositories;


use App\customer;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

class CustomerRepository
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
 {
     $this->user = $user;
 }

    public function getCustomer()
    {
        return $this->user->select('*')->get();
    }


    public function getCustomerId($id)
    {
        return $this->user->select('*')->where('id', $id)->first();
    }

    public function ChangePassword($request, $id)
    {
        try {
            $data  = $this->user->find($id);


            if ( Hash::check($request['oldpassword'],$data->password)) {
                $data->password = bcrypt($request->password);
                $data->save();
                return true;
            }
        } catch (QueryException $e) {

            return false;
        }
    }

}