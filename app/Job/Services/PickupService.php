<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/29/17
 * Time: 8:55 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\PickupRepository;

class PickupService
{
    /**
     * @var PickupRepository
     */
    private $pickupRepository;

    public function __construct(PickupRepository $pickupRepository)
    {
        $this->pickupRepository = $pickupRepository;
    }

    public function addpickuprequest($request)
    {
        $formData= $request->all();
        $formData = array_except($formData, ['_token', 'to', 'remove']);
        $formData['pickup_date'] = date("Y-m-d", strtotime($formData['pickup_date']));
        return $this->pickupRepository->addPickupRequest($formData);
    }

    public function getpickupdetail($id)
    {
        return $this->pickupRepository->getPickupDetail($id);
    }

    public function getpickupdetailbycusid($id)
    {
        return $this->pickupRepository->getPickupDetailByCusid($id);

    }

}