<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/21/16
 * Time: 11:30 AM
 */

namespace App\Job\Services\Api;


use App\Job\Repositories\Api\BaseRepository;
use App\Job\Repositories\Api\DistributorDetailRepository;
use App\Job\Repositories\Api\User\UserApiRepository;
use App\Job\Services\Api\BaseService;

class DistributorDetailService extends BaseService
{
    /**
     * @var DistributorDetailRepository
     */
    public $detailRepository;
    /**
     * @var UserApiRepository
     */
    public $user;
    /**
     * @var BaseRepository
     */
    public $baseRepository;

    /**
     * DistributorDetailService constructor.
     * @param DistributorDetailRepository $detailRepository
     * @param UserApiRepository $user
     * @param BaseRepository $baseRepository
     */
    public function __construct(DistributorDetailRepository $detailRepository, UserApiRepository $user,
                                BaseRepository $baseRepository)
    {
        $this->detailRepository = $detailRepository;
        $this->user             = $user;
        $this->baseRepository   = $baseRepository;
    }

    /**
     * @param $serviceDetails
     * @return array
     */
    public function createDetailService($serviceDetails)
    {
        if (!$this->validateToken($this->user, $serviceDetails['api_token'])) {

            return $this->tokenMessage();
        }

        $this->storeData($this->baseRepository, $serviceDetails);

        $details = [

            "name" => $serviceDetails['name'],
            "email"        => $serviceDetails['email'],
            "password"       => $serviceDetails['password'],

            ];

        if ($this->detailRepository->insertDetails($details)) {

            $respo = [

                "status"       => "true",
                "token_status" => "true",
                "message"      => "distributor details created!"

            ];

            return $respo;
            }

        $respo = [

            "status"       => "false",
            "token_status" => "true",
            "message"      => "oops !!! something went wrong"

            ];

        return $respo;
    }

    /**
     * @param $id
     * @param $request
     * @return array
     */
//    public function getService($id, $request)
//    {
//
//        if(!$this->validateToken($this->user, $request['api_token'])) {
//
//            return $this->tokenMessage();
//        }
//
//        $distributor    = $this->detailRepository->getDistDetail($id);
//
//        if ($distributor==null) {
//
//            $query = [
//
//                "status"       => "false",
//                "token_status" => "true",
//                "message"      => "distributor not found"
//
//            ];
//
//            return $query;
//        }
//
//        $distributor = (array)$distributor[0];
//
//        $data = [
//
//            "name"   => $distributor['name'],
//            "email"          => $distributor['email'],
//            "password"         => $distributor['password'],
//
//
//        ];
//
//        $detailData                 = [];
//        $detailData['status']       = "true";
//        $detailData['token_status'] = "true";
//
//        $address = $this->detailRepository->getDistAddress($id);
//
//        $distAddress = [
//
//            "Billing"  => [],
//            "Shipping" => []
//
//        ];
//
//        foreach ($address as $ad) {
//
//            $ad = (array)$ad;
//
//            if ($ad['type']=='Billing') {
//
//                $distAddress['Billing'][] = $this->getAddress($ad);
//            }
//
//            if ($ad['type']=='Shipping') {
//
//                $distAddress['Shipping'][] = $this->getAddress($ad);
//            }
//        }
//
//        $data['address'] = $distAddress;
//
//        $detailData['distributor_details'][] = $data;
//
//        return $detailData;
//    }

    /**
     * @param $ad
     * @return array
     */
//    public function getAddress($ad)
//    {
//        return [
//
//            "zone"      => $ad['zone'],
//            "district"  => $ad['district'],
//            "city"      => $ad['city'],
//            "latitude"  => $ad['latitude'],
//            "longitude" => $ad['longitude'],
//            "phone"     => $ad['phone'],
//            "mobile"    => $ad['mobile'],
//            "fax"       => $ad['fax'],
//            "id"        => $ad['id']
//
//        ];
//    }

    /**
     * @param $request
     * @return array
     */
//    public function getServiceList($request)
//    {
//        if (!$this->validateToken($this->user, $request['api_token'])) {
//
//            return $this->tokenMessage();
//        }
//
//        $detailList = $this->detailRepository->getAllDetail();
//
//        $dataList                 = [];
//        $dataList["status"]       = "true";
//        $dataList["token_status"] = "true";
//
//        foreach ($detailList as $list) {
//
//            $dataList["distributors"][] = [
//
//                "id" => $list->id,
//                "company_name" => $list->company_name,
//                "contact_name" => $list->contact_name,
//                "status"       => $list->status,
//
//                "address"      => [
//
//                    "zone"         => $list->zone,
//                    "district"     => $list->district,
//                    "latitude"     => $list->latitude,
//                    "longitude"    => $list->longitude
//
//                ]
//            ];
//        }
//
//        return $dataList;
//    }
}