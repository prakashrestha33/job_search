<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/24/17
 * Time: 8:34 PM
 */

namespace App\Portal\Repositories;


use App\Portal\Entities\Admin\Admin;
use App\Roleuser;
use Illuminate\Database\QueryException;

class AdminRepository
{
    /**
     * @var Admin
     */
    private $admin;

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function store_staff($formData)
    {
        try {
           if( $data=$this->admin->create($formData));
            {
                $userRole = [
                    'user_id' => $data['id'],
                    'role_id' => 2
                ];
                 $this->assignRole($userRole);
            }
            return true;
        } catch (QueryException $e) {
            return false;
        }
    }
    protected function assignRole(array $data)
    {
        return Roleuser::create($data);
    }

    public function getStaff()
    {
        return $this->admin->select('*')->where('id','!=',1)->get();
    }

    public function getStaffId($id)
    {
        return $this->admin->select('*')->where('id',$id)->first();
    }

    public function updatestaff($formData, $id)
    {
        try {
            $data=Admin::find($id);
            $data->firstName=$formData['firstName'];
            $data->lastName=$formData['lastName'];
            $data->email=$formData['email'];
            $data->update();
            return true;
        } catch (QueryException $e) {
            return false;
        }
    }

}