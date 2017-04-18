<?php
/**
 * Created by PhpStorm.
 * User: sawrose
 * Date: 4/2/17
 * Time: 3:57 PM
 */

namespace App\Portal\Repositories;


use App\batch;
use App\TrackingPost;
use Illuminate\Http\Request;

class TrackingRepository
{
    /**
     * @var TrackingPost
     */
    private $trackingPost;
    /**
     * @var batch
     */
    private $batch;


    /**
     * TrackingRepository constructor.
     */
    public function __construct(TrackingPost $trackingPost,batch $batch)
    {
        $this->trackingPost = $trackingPost;
        $this->batch = $batch;
    }

    public function insert($request)
    {
        $result =$this->trackingPost->create($request);
        if (isNull($result)){
            return null;
        }
        return $result;
    }

    public function getLocation($tracking_id)
    {
        $locat= $this->trackingPost->select('*')
                                    ->join('batches','batches.batch_id','tracking_posts.batch_id')
                                    ->get()->toArray();

        foreach ($locat as $loc)
        {
            $trackingarray[$loc['batch_id']]=explode(',',trim($loc['tracking_id']));

            foreach ( $trackingarray[$loc['batch_id']] as $key => $value) {
                if (trim($value) == "") {
                    unset($trackingarray[$loc['batch_id']][$key]);
                }
            }
            foreach( $trackingarray as $track=>$value)
            {
                foreach ($value as $trackid)
                {
                    if($trackid==$tracking_id){
                        $query= $this->batch->select('*')
                                            ->where('batches.batch_id',$track)
                                            ->get()->toArray();
                        $location= $this->trackingPost->select('*')
                                                        ->where('batch_id',$query[0]['batch_id'])
                                                        ->first();
                    }
                }

            }
        }
        return $location;
    }

    public function checkBatch($batch_id)
    {

        $result = $this->trackingPost->select('*')->where('batch_id',$batch_id)->first();
        if ($result == null){
            return false;
        }
        return $result;
    }

    public function update($request,$id)
    {
       $data=TrackingPost::find($id);
       $data['latitude']=$request['latitude'];
       $data['longitude']=$request['longitude'];
       $data['address_name']=$request['address_name'];
       $data->update();
       return $data;
    }
}