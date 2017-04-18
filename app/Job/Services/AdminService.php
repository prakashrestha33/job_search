<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/24/17
 * Time: 8:33 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\AdminRepository;

class AdminService
{
    /**
     * @var AdminRepository
     */
    private $adminRepository;

    public  function __construct(AdminRepository $adminRepository)
 {
     $this->adminRepository = $adminRepository;
 }

    public function storestaff($request)
    {
        $formData=$request->all();
        $formData['password']= bcrypt($formData['password']);

       $data= $this->adminRepository->store_staff($formData);

        return $data;
    }



    public function getstaff()
    {
        return $this->adminRepository->getStaff();
    }

    public function getstaffid($id)
    {
        return $this->adminRepository->getStaffId($id);
    }

    public function update_staff($request, $id)
    {
        $formData=$request->all();
        return $this->adminRepository->updatestaff($formData,$id);

    }
}