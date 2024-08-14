<?php 

namespace App\Repositories\Report_types;

/**
 * Class EloquentReport_typesRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Report_types\Report_types;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentReport_typesRepository extends DbRepository
{
    /**
     * Report_types Model
     *
     * @var Object
     */
    public $model;

    /**
     * Report_types Title
     *
     * @var string
     */
    public $moduleTitle = 'Report_types';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        'id'        => 'Id',
		'title'        => 'Title',
		'cost'        => 'Cost',
		'appx_time'        => 'Appx_time',
		'note'        => 'Note',
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
		'title' =>   [
                    'data'          => 'title',
                    'name'          => 'title',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'cost' =>   [
                    'data'          => 'cost',
                    'name'          => 'cost',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'appx_time' =>   [
                    'data'          => 'appx_time',
                    'name'          => 'appx_time',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'note' =>   [
                    'data'          => 'note',
                    'name'          => 'note',
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
        'listRoute'     => 'report_types.index',
        'createRoute'   => 'report_types.create',
        'storeRoute'    => 'report_types.store',
        'editRoute'     => 'report_types.edit',
        'updateRoute'   => 'report_types.update',
        'deleteRoute'   => 'report_types.destroy',
        'dataRoute'     => 'report_types.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'report_types.index',
        'createView'    => 'report_types.create',
        'editView'      => 'report_types.edit',
        'deleteView'    => 'report_types.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Report_types;
    }

    /**
     * Create Report_types
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
     * Update Report_types
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
     * Destroy Report_types
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

    public function getReportTypes()
    {
        return $this->model->where('account_id', getActiveAccountId())->get();
    }
}