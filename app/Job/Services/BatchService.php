<?php
/**
 * Created by PhpStorm.
 * User: Marmik Shrestha
 * Date: 4/3/2017
 * Time: 7:43 PM
 */

namespace App\Portal\Services;


use App\Portal\Repositories\BatchRepository;

class BatchService
{

    /**
     * @var BatchRepository
     */
    private $batchRepository;

    public function __construct(BatchRepository $batchRepository)
    {

        $this->batchRepository = $batchRepository;
    }

    public function addBatch($request)
    {
        $data=$request->all();
        $data = array_except($data, ['_token', 'to', 'remove']);

        return $this->batchRepository->addbatch($data);
    }

    public function getallbatch()
    {
        return $this->batchRepository->getAllBatch();
    }

    public function getbatchId($id)
    {
        return $this->batchRepository->getBatchIdtrack($id);
    }

}