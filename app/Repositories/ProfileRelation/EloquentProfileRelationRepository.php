<?php 

namespace App\Repositories\ProfileRelation;

/**
 * Class EloquentProfileRelationRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\ProfileRelation\ProfileRelation;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentProfileRelationRepository extends DbRepository
{
    /**
     * ProfileRelation Model
     *
     * @var Object
     */
    public $model;

    /**
     * ProfileRelation Title
     *
     * @var string
     */
    public $moduleTitle = 'ProfileRelation';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'profile_id'        => 'Profile_id',
		'related_profile_id'        => 'Related_profile_id',
		'relation_type'        => 'Relation_type',
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
		'profile_id' =>   [
                    'data'          => 'profile_id',
                    'name'          => 'profile_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'related_profile_id' =>   [
                    'data'          => 'related_profile_id',
                    'name'          => 'related_profile_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'relation_type' =>   [
                    'data'          => 'relation_type',
                    'name'          => 'relation_type',
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
        'listRoute'     => 'profilerelation.index',
        'createRoute'   => 'profilerelation.create',
        'storeRoute'    => 'profilerelation.store',
        'editRoute'     => 'profilerelation.edit',
        'updateRoute'   => 'profilerelation.update',
        'deleteRoute'   => 'profilerelation.destroy',
        'dataRoute'     => 'profilerelation.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'profilerelation.index',
        'createView'    => 'profilerelation.create',
        'editView'      => 'profilerelation.edit',
        'deleteView'    => 'profilerelation.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new ProfileRelation;
    }

    /**
     * Create ProfileRelation
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
     * Update ProfileRelation
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
     * Destroy ProfileRelation
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
}