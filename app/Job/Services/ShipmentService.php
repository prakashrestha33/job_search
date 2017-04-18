<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:17 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\ShipmentRepository;

class ShipmentService
{

    /**
     * @var ShipmentRepository
     */
    private $shipmentRepository;

    public function __construct(ShipmentRepository $shipmentRepository)
    {
        $this->shipmentRepository = $shipmentRepository;
    }

    public function add_shipment($request)
    {
        $formData = $request->all();
        $data= $this->shipmentRepository->addShipment($formData);
        return $data;
    }

    public function viewall()
    {
        $data= $this->shipmentRepository->viewallShipment();
        return $data;
    }

    public function getshipmentId($id)
    {
        $data= $this->shipmentRepository->singleshippment($id);
        return $data;
    }

    public function update_shipment($request, $id)
    {
        $formData=$request->all();
        return $this->shipmentRepository->updateShipment($formData,$id);
    }


    public function getpackagebytrack($request)
    {

        $data=$request->all();
        $tid=$data['tracking_id'];
        return $this->shipmentRepository->getPackagebyTracking($tid);
    }

    public function getshipbytrackid($id)
    {
        return $this->shipmentRepository->getPackagebyTracking($id);
    }
    public function add_shipment_type($request)
    {
        $formData=$request->all();
        return $this->shipmentRepository->storeshippmenttype($formData);

    }

    public function getallShipmenttype()
    {
        return $this->shipmentRepository->getAllShipmentType();
    }

    public function getShipmenttypeid($shipment_type)
    {
        return $this->shipmentRepository->getshipmenttypeid($shipment_type);
    }

    public function checktracking_id($data)
    {
        $result = $this->shipmentRepository->updatestatus($data,$data['tracking_id']);
        if ($result == null) {
            $data = [
                "error" => true,
                "message" => "Data Cannot be Created"
            ];
            return $data;
        }

        $data = [
            "error" => false,
            "message" => "Data updated Successfully",
        ];
        return $data;
    }


}