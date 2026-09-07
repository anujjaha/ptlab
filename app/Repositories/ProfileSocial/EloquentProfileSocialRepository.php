<?php 

namespace App\Repositories\ProfileSocial;

/**
 * Class EloquentProfileSocialRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\ProfileSocial\ProfileSocial;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentProfileSocialRepository extends DbRepository
{
    /**
     * ProfileSocial Model
     *
     * @var Object
     */
    public $model;

    /**
     * ProfileSocial Title
     *
     * @var string
     */
    public $moduleTitle = 'ProfileSocial';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'profile_id'        => 'Profile_id',
		'social_platform_id'        => 'Social_platform_id',
		'social_url'        => 'Social_url',
		'status'        => 'Status',
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
		'social_platform_id' =>   [
                    'data'          => 'social_platform_id',
                    'name'          => 'social_platform_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'social_url' =>   [
                    'data'          => 'social_url',
                    'name'          => 'social_url',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'status' =>   [
                    'data'          => 'status',
                    'name'          => 'status',
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
        'listRoute'     => 'profilesocial.index',
        'createRoute'   => 'profilesocial.create',
        'storeRoute'    => 'profilesocial.store',
        'editRoute'     => 'profilesocial.edit',
        'updateRoute'   => 'profilesocial.update',
        'deleteRoute'   => 'profilesocial.destroy',
        'dataRoute'     => 'profilesocial.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'profilesocial.index',
        'createView'    => 'profilesocial.create',
        'editView'      => 'profilesocial.edit',
        'deleteView'    => 'profilesocial.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new ProfileSocial;
    }

    /**
     * Create ProfileSocial
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
     * Update ProfileSocial
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
     * Destroy ProfileSocial
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