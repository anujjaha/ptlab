<?php 

namespace App\Repositories\SampleCollector;

/**
 * Class EloquentSampleCollectorRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\SampleCollector\SampleCollector;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentSampleCollectorRepository extends DbRepository
{
    /**
     * SampleCollector Model
     *
     * @var Object
     */
    public $model;

    /**
     * SampleCollector Title
     *
     * @var string
     */
    public $moduleTitle = 'SampleCollector';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        'id'        => 'Id',
		'name'        => 'Name',
		'address'        => 'Address',
		'email'        => 'Email',
		'mobile'        => 'Mobile',
		'other_mob_number'        => 'Other_mob_number',
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
		'name' =>   [
                    'data'          => 'name',
                    'name'          => 'name',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'address' =>   [
                    'data'          => 'address',
                    'name'          => 'address',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'email' =>   [
                    'data'          => 'email',
                    'name'          => 'email',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'mobile' =>   [
                    'data'          => 'mobile',
                    'name'          => 'mobile',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'other_mob_number' =>   [
                    'data'          => 'other_mob_number',
                    'name'          => 'other_mob_number',
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
        'listRoute'     => 'samplecollector.index',
        'createRoute'   => 'samplecollector.create',
        'storeRoute'    => 'samplecollector.store',
        'editRoute'     => 'samplecollector.edit',
        'updateRoute'   => 'samplecollector.update',
        'deleteRoute'   => 'samplecollector.destroy',
        'dataRoute'     => 'samplecollector.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'samplecollector.index',
        'createView'    => 'samplecollector.create',
        'editView'      => 'samplecollector.edit',
        'deleteView'    => 'samplecollector.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new SampleCollector;
    }

    /**
     * Create SampleCollector
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
            return $model;
        }

        return false;
    }

    /**
     * Update SampleCollector
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
     * Destroy SampleCollector
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
        $accountId = getActiveAccountId();
        if($accountId)
        {
            return $this->model->select($this->getTableFields())
                ->where('account_id', $accountId)
                ->get();    
        }

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
        $input = array_merge($input, ['account_id' => getActiveAccountId()]);

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

    public function getAllCollectors()
    {
        return $this->model->where('account_id', getActiveAccountId())->get();
    }
}