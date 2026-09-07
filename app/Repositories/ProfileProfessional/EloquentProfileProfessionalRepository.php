<?php 

namespace App\Repositories\ProfileProfessional;

/**
 * Class EloquentProfileProfessionalRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\ProfileProfessional\ProfileProfessional;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentProfileProfessionalRepository extends DbRepository
{
    /**
     * ProfileProfessional Model
     *
     * @var Object
     */
    public $model;

    /**
     * ProfileProfessional Title
     *
     * @var string
     */
    public $moduleTitle = 'ProfileProfessional';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'profile_id'        => 'Profile_id',
		'profession_category_id'        => 'Profession_category_id',
		'business_id'        => 'Business_id',
		'education'        => 'Education',
		'company'        => 'Company',
		'occupation'        => 'Occupation',
		'job_title'        => 'Job_title',
		'is_government'        => 'Is_government',
		'is_retired'        => 'Is_retired',
		'is_business'        => 'Is_business',
		'business_title'        => 'Business_title',
		'business_details'        => 'Business_details',
		'is_social'        => 'Is_social',
		'social_details'        => 'Social_details',
		'notes'        => 'Notes',
		'overall_experience'        => 'Overall_experience',
		'is_student'        => 'Is_student',
		'is_open'        => 'Is_open',
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
		'profession_category_id' =>   [
                    'data'          => 'profession_category_id',
                    'name'          => 'profession_category_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'business_id' =>   [
                    'data'          => 'business_id',
                    'name'          => 'business_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'education' =>   [
                    'data'          => 'education',
                    'name'          => 'education',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'company' =>   [
                    'data'          => 'company',
                    'name'          => 'company',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'occupation' =>   [
                    'data'          => 'occupation',
                    'name'          => 'occupation',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'job_title' =>   [
                    'data'          => 'job_title',
                    'name'          => 'job_title',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_government' =>   [
                    'data'          => 'is_government',
                    'name'          => 'is_government',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_retired' =>   [
                    'data'          => 'is_retired',
                    'name'          => 'is_retired',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_business' =>   [
                    'data'          => 'is_business',
                    'name'          => 'is_business',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'business_title' =>   [
                    'data'          => 'business_title',
                    'name'          => 'business_title',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'business_details' =>   [
                    'data'          => 'business_details',
                    'name'          => 'business_details',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_social' =>   [
                    'data'          => 'is_social',
                    'name'          => 'is_social',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'social_details' =>   [
                    'data'          => 'social_details',
                    'name'          => 'social_details',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'notes' =>   [
                    'data'          => 'notes',
                    'name'          => 'notes',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'overall_experience' =>   [
                    'data'          => 'overall_experience',
                    'name'          => 'overall_experience',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_student' =>   [
                    'data'          => 'is_student',
                    'name'          => 'is_student',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'is_open' =>   [
                    'data'          => 'is_open',
                    'name'          => 'is_open',
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
        'listRoute'     => 'profileprofessional.index',
        'createRoute'   => 'profileprofessional.create',
        'storeRoute'    => 'profileprofessional.store',
        'editRoute'     => 'profileprofessional.edit',
        'updateRoute'   => 'profileprofessional.update',
        'deleteRoute'   => 'profileprofessional.destroy',
        'dataRoute'     => 'profileprofessional.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'profileprofessional.index',
        'createView'    => 'profileprofessional.create',
        'editView'      => 'profileprofessional.edit',
        'deleteView'    => 'profileprofessional.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new ProfileProfessional;
    }

    /**
     * Create ProfileProfessional
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
     * Update ProfileProfessional
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
     * Destroy ProfileProfessional
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