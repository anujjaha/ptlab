<?php 

namespace App\Repositories\ProfileAddress;

/**
 * Class EloquentProfileAddressRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\ProfileAddress\ProfileAddress;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentProfileAddressRepository extends DbRepository
{
    /**
     * ProfileAddress Model
     *
     * @var Object
     */
    public $model;

    /**
     * ProfileAddress Title
     *
     * @var string
     */
    public $moduleTitle = 'ProfileAddress';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'profile_id'        => 'Profile_id',
		'address_line1'        => 'Address_line1',
		'address_line2'        => 'Address_line2',
		'city_id'        => 'City_id',
		'state_id'        => 'State_id',
		'pin'        => 'Pin',
		'is_current'        => 'Is_current',
		'is_own'        => 'Is_own',
		'rent'        => 'Rent',
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
		'address_line1' =>   [
                    'data'          => 'address_line1',
                    'name'          => 'address_line1',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'address_line2' =>   [
                    'data'          => 'address_line2',
                    'name'          => 'address_line2',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'city_id' =>   [
                    'data'          => 'city_id',
                    'name'          => 'city_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'state_id' =>   [
                    'data'          => 'state_id',
                    'name'          => 'state_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'pin' =>   [
                    'data'          => 'pin',
                    'name'          => 'pin',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_current' =>   [
                    'data'          => 'is_current',
                    'name'          => 'is_current',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_own' =>   [
                    'data'          => 'is_own',
                    'name'          => 'is_own',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'rent' =>   [
                    'data'          => 'rent',
                    'name'          => 'rent',
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
        'listRoute'     => 'profileaddress.index',
        'createRoute'   => 'profileaddress.create',
        'storeRoute'    => 'profileaddress.store',
        'editRoute'     => 'profileaddress.edit',
        'updateRoute'   => 'profileaddress.update',
        'deleteRoute'   => 'profileaddress.destroy',
        'dataRoute'     => 'profileaddress.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'profileaddress.index',
        'createView'    => 'profileaddress.create',
        'editView'      => 'profileaddress.edit',
        'deleteView'    => 'profileaddress.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new ProfileAddress;
    }

    /**
     * Create ProfileAddress
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
     * Update ProfileAddress
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
     * Destroy ProfileAddress
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