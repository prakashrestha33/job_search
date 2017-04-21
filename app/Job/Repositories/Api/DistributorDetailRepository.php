<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/21/16
 * Time: 11:39 AM
 */

namespace App\Job\Repositories\Api;


use App\User;
use Illuminate\Support\Facades\DB;

class DistributorDetailRepository
{
    /**
     * @var DistributorDetails
     */
    public $distributorDetails;
    /**
     * @var User
     */
    private $user;

    /**
     * DistributorDetailRepository constructor.
     * @param DistributorDetails $distributorDetails
     */
    public function __construct(User $user)
    {

        $this->user = $user;
    }

    /**
     * @param $dist_details
     * @return static
     */
    public function insertDetails($dist_details)
    {
        return $this->user->create($dist_details);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDistDetail($id)
    {
        $query = DB::table('distributor_details')
                         ->join('order_payments', 'distributor_details.id', '=', 'order_payments.distributor_id')
                         ->select('distributor_details.*', DB::raw('sum(order_payments.amount) as paid_amount'))
                         ->where('distributor_details.id', '=', $id);

        return $query->get()->toArray();
    }

    /**
     * @param $id
     * @return mixed
     */


    /**
     * @param $id
     * @return mixed
     */


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllDetail()
    {
        $query = $this->user->all();

        return $query;
    }
}