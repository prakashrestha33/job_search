<?php
/**
 * Created by PhpStorm.
 * User: Marmik Shrestha
 * Date: 4/3/2017
 * Time: 7:44 PM
 */

namespace App\Portal\Repositories;


use App\batch;
use Illuminate\Database\QueryException;

class BatchRepository
{
    /**
     * @var batch
     */
    private $batch;

    /**
     * BatchRepository constructor.
     * @param batch $batch
     */
    public  function __construct(batch $batch)
    {
        $this->batch = $batch;
    }

    public function addbatch($data)
    {
        try {
            $this->batch->create($data);
            return true;
        } catch (QueryException $e) {
            return false;
        }

    }

    public function getAllBatch()
    {
        return $this->batch->select('*')->get();
    }

    public function getBatchIdtrack($id)
    {
        return $this->batch->select('*')
                            ->join('tracking_posts','tracking_posts.batch_id','batches.batch_id')
                            ->where('batches.id',$id)->first();
    }


}