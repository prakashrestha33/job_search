<?php
/**
 * Created by PhpStorm.
 * User: prakash
 * Date: 3/18/17
 * Time: 5:19 PM
 */

namespace App\Portal\Repositories;


use App\Shipment;
use App\ShipmentType;
use Illuminate\Database\QueryException;

class ShipmentRepository
{
    /**
     * @var Shipment
     */
    private $shipment;
    /**
     * @var ShipmentType
     */
    private $shipmentType;


    /**
     * ShipmentRepository constructor.
     * @param Shipment $shipment
     */
    public function __construct(Shipment $shipment, ShipmentType $shipmentType)
    {
        $this->shipment = $shipment;
        $this->shipmentType = $shipmentType;
    }

    public function addShipment($formData)
    {

        try {
            $this->shipment->create($formData);
            return true;
        } catch (QueryException $e) {
            dd($e);
            return $e;
        }
    }

    public function viewallShipment()
    {
       return $this->shipment->select('*')->get();
    }

    public function singleshippment($id)
    {
        return $this->shipment->select('*')
                            ->where('id',$id)->first();
    }

    public function updateShipment($formData, $id)
    {
        try {
            $data= Shipment::find($id);
            $data->customer_name=$formData['customer_name'];
            $data->receiver_name=$formData['receiver_name'];
            $data->receiver_mobile_no=$formData['receiver_mobile_no'];
            $data->shipment_type=$formData['shipment_type'];
            $data->package_id=$formData['package_id'];
            $data->delivery_country=$formData['delivery_country'];
            $data->delivery_state=$formData['delivery_state'];
            $data->delivery_city=$formData['delivery_city'];
            $data->delivery_street_name=$formData['delivery_street_name'];
            $data->delivery_home_no=$formData['delivery_home_no'];
            $data->departure_date=$formData['departure_date'];
            $data->delivery_date=$formData['delivery_date'];
            $data->update();

            return true;
        } catch (QueryException $e) {
            return false;
        }

    }


    public function getPackagebyTracking($tracking_id)
    {
        $query=$this->shipment->select('*')->where('tracking_id',$tracking_id)->first();
        return $query;
    }

    public function storeshippmenttype($formData)
    {
        try {
            $this->shipmentType->create($formData);
            return true;
        } catch (QueryException $e) {
            return false;
        }
    }

    public function getAllShipmentType()
    {
        return $this->shipmentType->select('*')->get();
    }

    public function getshipmenttypeid($shipment_type)
    {
       return $this->shipmentType->select('*')->where('id',$shipment_type)->first();

    }

    public function updatestatus($data, $id)
    {
        $query=$this->shipment->select('*')->where('tracking_id',$id)->first();
        $data1=Shipment::find($query->id);
        $data1['delivery_status']=$data['delivery_status'];
        $data1->update();
        return $data;
    }


}