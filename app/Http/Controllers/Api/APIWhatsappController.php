<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Transformers\WhatsappTransformer;
use App\Http\Controllers\Api\BaseApiController;
use App\Repositories\Whatsapp\EloquentWhatsappRepository;

class APIWhatsappController extends BaseApiController
{
    /**
     * Whatsapp Transformer
     *
     * @var Object
     */
    protected $whatsappTransformer;

    /**
     * Repository
     *
     * @var Object
     */
    protected $repository;

    /**
     * PrimaryKey
     *
     * @var string
     */
    protected $primaryKey = 'whatsappId';

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->repository                       = new EloquentWhatsappRepository();
        $this->whatsappTransformer = new WhatsappTransformer();
    }

    /**
     * List of All Whatsapp
     *
     * @param Request $request
     * @return json
     */
    public function index(Request $request)
    {
        $paginate   = $request->get('paginate') ? $request->get('paginate') : false;
        $orderBy    = $request->get('orderBy') ? $request->get('orderBy') : 'id';
        $order      = $request->get('order') ? $request->get('order') : 'ASC';
        $items      = $paginate ? $this->repository->model->orderBy($orderBy, $order)->paginate($paginate)->items() : $this->repository->getAll($orderBy, $order);

        if(isset($items) && count($items))
        {
            $itemsOutput = $this->whatsappTransformer->transformCollection($items);

            return $this->successResponse($itemsOutput);
        }

        return $this->setStatusCode(400)->failureResponse([
            'message' => 'Unable to find Whatsapp!'
            ], 'No Whatsapp Found !');
    }

    /**
     * Create New (Store)
     *
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $model = $this->repository->create($request->all());

        if($model)
        {
            $responseData = $this->whatsappTransformer->transform($model);

            return $this->successResponse($responseData, 'Whatsapp is Created Successfully');
        }

        return $this->setStatusCode(400)->failureResponse([
            'reason' => 'Invalid Inputs'
            ], 'Something went wrong !');
    }

    /**
     * View
     *
     * @param Request $request
     * @param Int $id
     * @return string
     */
    public function show(Request $request, $id = null)
    {
        $itemId = (int) hasher()->decode($id);

        if($itemId)
        {
            $itemData = $this->repository->getById($itemId);

            if($itemData)
            {
                $responseData = $this->whatsappTransformer->transform($itemData);

                return $this->successResponse($responseData, 'View Item');
            }
        }

        return $this->setStatusCode(400)->failureResponse([
            'reason' => 'Invalid Inputs or Item not exists !'
            ], 'Something went wrong !');
    }

    /**
     * Update
     *
     * @param Request $request
     * @param int $id
     * @return string
     */
    public function update(Request $request, $id = null)
    {
        $itemId = (int) hasher()->decode($id);

        if($itemId)
        {
            $status = $this->repository->update($itemId, $request->all());

            if($status)
            {
                $itemData       = $this->repository->getById($itemId);
                $responseData   = $this->whatsappTransformer->transform($itemData);

                return $this->successResponse($responseData, 'Whatsapp is Edited Successfully');
            }
        }

        return $this->setStatusCode(400)->failureResponse([
            'reason' => 'Invalid Inputs'
        ], 'Something went wrong !');
    }

    /**
     * Delete ( Destroy )
     *
     * @param Request $request
     * @return string
     */
    public function destroy(Request $request, $id = null)
    {
        $itemId = (int) hasher()->decode($id);

        if($itemId)
        {
            $status = $this->repository->destroy($itemId);

            if($status)
            {
                return $this->successResponse([
                    'success' => 'Whatsapp Deleted'
                ], 'Whatsapp is Deleted Successfully');
            }
        }

        return $this->setStatusCode(404)->failureResponse([
            'reason' => 'Invalid Inputs'
        ], 'Something went wrong !');
    }
}