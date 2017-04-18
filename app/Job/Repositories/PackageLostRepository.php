<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:19 PM
 */

namespace App\Portal\Repositories;


use App\LostPackage;
use Illuminate\Database\QueryException;

class PackageLostRepository
{


    /**
     * @var LostPackage
     */
    private $lostPackage;

    public function __construct(LostPackage $lostPackage )
    {
        $this->lostPackage = $lostPackage;
    }

    public function addPackageReport($formData)
    {
        try {
//            dd($formData);
            $this->lostPackage->create($formData);
            return true;
        } catch (QueryException $e) {
            return false;
        }
    }

    public function getPackageReports()
    {
        return $this->lostPackage->select('*')->get();
    }


}