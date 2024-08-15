<?php 

namespace App\Repositories\Whatsapp;

/**
 * Class EloquentWhatsappRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Whatsapp\Whatsapp;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentWhatsappRepository extends DbRepository
{
    /**
     * Whatsapp Model
     *
     * @var Object
     */
    public $model;

    /**
     * Whatsapp Title
     *
     * @var string
     */
    public $moduleTitle = 'Whatsapp';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'to_phone'        => 'To_phone',
		'body'        => 'Body',
"actions"         => "Actions"
    ];

    /**
     * Table Columns
     *
     * @var array
     */
    public $tableColumns = [
        'id' =>   [
                    'data'          => 'id',
                    'name'          => 'id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'to_phone' =>   [
                    'data'          => 'to_phone',
                    'name'          => 'to_phone',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'body' =>   [
                    'data'          => 'body',
                    'name'          => 'body',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'actions' => [
                'data'          => 'actions',
                'name'          => 'actions',
                'searchable'    => false,
                'sortable'      => false
            ]
    ];

    /**
     * Is Admin
     *
     * @var boolean
     */
    protected $isAdmin = false;

    /**
     * Admin Route Prefix
     *
     * @var string
     */
    public $adminRoutePrefix = 'admin';

    /**
     * Client Route Prefix
     *
     * @var string
     */
    public $clientRoutePrefix = 'frontend';

    /**
     * Admin View Prefix
     *
     * @var string
     */
    public $adminViewPrefix = 'backend';

    /**
     * Client View Prefix
     *
     * @var string
     */
    public $clientViewPrefix = 'frontend';

    /**
     * Module Routes
     *
     * @var array
     */
    public $moduleRoutes = [
        'listRoute'     => 'whatsapp.index',
        'createRoute'   => 'whatsapp.create',
        'storeRoute'    => 'whatsapp.store',
        'editRoute'     => 'whatsapp.edit',
        'updateRoute'   => 'whatsapp.update',
        'deleteRoute'   => 'whatsapp.destroy',
        'dataRoute'     => 'whatsapp.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'whatsapp.index',
        'createView'    => 'whatsapp.create',
        'editView'      => 'whatsapp.edit',
        'deleteView'    => 'whatsapp.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Whatsapp;
    }

    /**
     * Create Whatsapp
     *
     * @param array $input
     * @return mixed
     */
    public function create($input)
    {
        $input = $this->prepareInputData($input, true);
        $model = $this->model->create($input);

        if($model)
        {
            $this->sendWaMessage();
            return $model;
        }

        return false;
    }

    /**
     * Update Whatsapp
     *
     * @param int $id
     * @param array $input
     * @return bool|int|mixed
     */
    public function update($id, $input)
    {
        $model = $this->model->find($id);

        if($model)
        {
            $input = $this->prepareInputData($input);

            return $model->update($input);
        }

        return false;
    }

    /**
     * Destroy Whatsapp
     *
     * @param int $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $model = $this->model->find($id);

        if($model)
        {
            return $model->delete();
        }

        return  false;
    }

    /**
     * Get All
     *
     * @param string $orderBy
     * @param string $sort
     * @return mixed
     */
    public function getAll($orderBy = 'id', $sort = 'asc')
    {
        return $this->model->orderBy($orderBy, $sort)->get();
    }

    /**
     * Get by Id
     *
     * @param int $id
     * @return mixed
     */
    public function getById($id = null)
    {
        if($id)
        {
            return $this->model->find($id);
        }

        return false;
    }

    /**
     * Get Table Fields
     *
     * @return array
     */
    public function getTableFields()
    {
        return [
            $this->model->getTable().'.*'
        ];
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->model->select($this->getTableFields())->get();
    }

    /**
     * Set Admin
     *
     * @param boolean $isAdmin [description]
     */
    public function setAdmin($isAdmin = false)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Prepare Input Data
     *
     * @param array $input
     * @param bool $isCreate
     * @return array
     */
    public function prepareInputData($input = array(), $isCreate = false)
    {
        if($isCreate)
        {
            $input = array_merge($input, ['user_id' => access()->user()->id]);
        }

        return $input;
    }

    /**
     * Get Table Headers
     *
     * @return string
     */
    public function getTableHeaders()
    {
        if($this->isAdmin)
        {
            return json_encode($this->setTableStructure($this->tableHeaders));
        }

        $clientHeaders = $this->tableHeaders;

        unset($clientHeaders['username']);

        return json_encode($this->setTableStructure($clientHeaders));
    }

    /**
     * Get Table Columns
     *
     * @return string
     */
    public function getTableColumns()
    {
        if($this->isAdmin)
        {
            return json_encode($this->setTableStructure($this->tableColumns));
        }

        $clientColumns = $this->tableColumns;

        unset($clientColumns['username']);

        return json_encode($this->setTableStructure($clientColumns));
    }

    /**
     * Send WA Message
     * @param string $toMobile
     * @param string $body
     * @return bool
     */
    public function sendWaMessage($url = null, $toMobile = null, $params = [])
    {
        if(isset($url) &&  isset($toMobile) && is_array($params) && count($params))
        {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type:application/json',
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultStr = curl_exec($ch);
            $response =  json_decode($resultStr, true);

            return $this->model->create([
                'to_phone'      => $toMobile,
                'template_url'  => $url,
                'body'          => json_encode($params),
                'status'        => $response['status'] ?? 202,
                'messageId'     => $response['messageId'] ?? null,
            ]);
        }

        return false;
    }

     /**
     * Send WA Message
     * @param string $toMobile
     * @param string $body
     * @return bool
     */
    public function sendMediaWaMsg($account = null, $url = null, $toMobile = null, $params = [], $bodyOptions = [])
    {
        if(isset($url) &&  isset($toMobile) && is_array($params) && count($params))
        {
            // if(env('WA_SANDBOX') && env('WA_SANDBOX') == true) 
            // {
            //     return true;
            // }
            
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type:application/json',
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultStr = curl_exec($ch);
            $response =  json_decode($resultStr, true);
            
  
            return $this->model->create([
                'account_id'    => $account->id,
                'to_phone'      => $toMobile,
                'body_content'  => $bodyOptions['body_content'] ?? null,
                'input_params'  => json_encode($params),
                'media_url'     => $bodyOptions['media_url'],
                'status'        => $response['status'] ?? 202,
                'message_id'     => $response['messageId'] ?? null,
                'from_phone'    => $account->accountConfig->wa_phone_number,
                'notes'         => 'send wa at : ' .date('d-m-Y h:i a'),
            ]);
        }

        return false;
    }
}