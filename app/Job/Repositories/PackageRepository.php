<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:19 PM
 */

namespace App\Portal\Repositories;


use App\Package;
use Illuminate\Database\QueryException;

class PackageRepository
{

    /**
     * @var Package
     */
    private $package;

    public function __construct(Package $package)
    {

        $this->package = $package;
    }

    public function addPackage($formData)
    {

        try {
            $this->package->insert($formData);
            return true;
        } catch (QueryException $e) {
            return false;
        }
    }

    public function getPackage()
    {
        return $this->package->select('*')->get();
    }

    public function getPackageId($id)
    {
        return $this->package->select('*')->where('id',$id)->first();
    }

    public function updatePackage($formData, $id)
    {
        try {
           $data= Package::find($id);
           $data->type=$formData['type'];
           $data->weight=$formData['weight'];
           $data->price=$formData['price'];
           $data->update();

            return true;
        } catch (QueryException $e) {
            return false;
        }

    }

}