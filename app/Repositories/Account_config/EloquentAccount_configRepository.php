<?php 

namespace App\Repositories\Account_config;

/**
 * Class EloquentAccount_configRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Account_config\Account_config;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentAccount_configRepository extends DbRepository
{
    /**
     * Account_config Model
     *
     * @var Object
     */
    public $model;

    /**
     * Account_config Title
     *
     * @var string
     */
    public $moduleTitle = 'Account_config';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'account_id'        => 'Account_id',
		'is_watsapp'        => 'Is_watsapp',
		'is_email'        => 'Is_email',
		'email_host'        => 'Email_host',
		'email_password'        => 'Email_password',
		'monthly_limit'        => 'Monthly_limit',
		'daily_limit'        => 'Daily_limit',
		'wa_template_url'        => 'Wa_template_url',
		'wa_template_id'        => 'Wa_template_id',
		'wa_phone_number'        => 'Wa_phone_number',
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
		'account_id' =>   [
                    'data'          => 'account_id',
                    'name'          => 'account_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_watsapp' =>   [
                    'data'          => 'is_watsapp',
                    'name'          => 'is_watsapp',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_email' =>   [
                    'data'          => 'is_email',
                    'name'          => 'is_email',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'email_host' =>   [
                    'data'          => 'email_host',
                    'name'          => 'email_host',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'email_password' =>   [
                    'data'          => 'email_password',
                    'name'          => 'email_password',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'monthly_limit' =>   [
                    'data'          => 'monthly_limit',
                    'name'          => 'monthly_limit',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'daily_limit' =>   [
                    'data'          => 'daily_limit',
                    'name'          => 'daily_limit',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'wa_template_url' =>   [
                    'data'          => 'wa_template_url',
                    'name'          => 'wa_template_url',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'wa_template_id' =>   [
                    'data'          => 'wa_template_id',
                    'name'          => 'wa_template_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'wa_phone_number' =>   [
                    'data'          => 'wa_phone_number',
                    'name'          => 'wa_phone_number',
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
        'listRoute'     => 'account_config.index',
        'createRoute'   => 'account_config.create',
        'storeRoute'    => 'account_config.store',
        'editRoute'     => 'account_config.edit',
        'updateRoute'   => 'account_config.update',
        'deleteRoute'   => 'account_config.destroy',
        'dataRoute'     => 'account_config.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'account_config.index',
        'createView'    => 'account_config.create',
        'editView'      => 'account_config.edit',
        'deleteView'    => 'account_config.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Account_config;
    }

    /**
     * Create Account_config
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
     * Update Account_config
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
     * Destroy Account_config
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