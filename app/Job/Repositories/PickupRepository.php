<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/29/17
 * Time: 8:56 PM
 */

namespace App\Portal\Repositories;


use App\Pickup;
use Illuminate\Database\QueryException;

class PickupRepository
{
    /**
     * @var Pickup
     */
    private $pickup;

    public function __construct(Pickup $pickup)
    {
        $this->pickup = $pickup;
    }

    public function addPickupRequest($formData)
    {
        try {
            $query=$this->pickup->create($formData);
            return $query;
        } catch (QueryException $e) {
            return false;
        }
    }

    public function getPickupDetail($id)
    {
        return $this->pickup->select('*')->where('id',$id)->first();
    }

    public function getPickupDetailByCusid($id)
    {
        return $this->pickup->select('*')
            ->join('packages','packages.id','pickups.package_id')
            ->where('customer_id',$id)->get()->toArray();
    }

}