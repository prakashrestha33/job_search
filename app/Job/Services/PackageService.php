<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:17 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\PackageRepository;
use App\Portal\Repositories\PackageLostRepository;

class PackageService
{


    /**
     * @var PackageRepository
     */
    private $packageRepository;
    /**
     * @var PackageLostRepository
     */
    private $packageLostRepository;

    public function __construct(PackageRepository $packageRepository,PackageLostRepository $packageLostRepository)
    {
        $this->packageRepository = $packageRepository;
        $this->packageLostRepository = $packageLostRepository;
    }

    public function addPackage($request)
    {

        $formData = $request->all();
        $formData = array_except($formData, ['_token', 'to', 'remove']);
        $data= $this->packageRepository->addPackage($formData);
        return $data;
    }

    public function getpackage()
    {
        return $this->packageRepository->getPackage();
    }

    public function getpackageid($id)
    {
        return $this->packageRepository->getPackageId($id);
    }

    public function update_package($request, $id)
    {
        $formData=$request->all();
        return $this->packageRepository->updatePackage($formData,$id);
    }

    public function addPackagereport($request)
    {
        $formData=$request->all();
        $formData = array_except($formData, ['_token', 'to', 'remove']);
        return $this->packageLostRepository->addPackageReport($formData);
    }

    public function getpackagereports()
    {
        return $this->packageLostRepository->getPackageReports();
    }



}