<?php 

namespace App\Repositories\Profile;

/**
 * Class EloquentProfileRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Profile\Profile;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;
use App\Models\City\City;
use App\Models\ProfileAddress\ProfileAddress;
use App\Models\ProfessionCategory\ProfessionCategory;
use App\Models\ProfileProfessional\ProfileProfessional;

class EloquentProfileRepository extends DbRepository
{
    /**
     * Profile Model
     *
     * @var Object
     */
    public $model;

    /**
     * Profile Title
     *
     * @var string
     */
    public $moduleTitle = 'Profile';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        'category_id'        => 'Category_id',
		'caste_id'        => 'Caste_id',
		'sub_caste_id'        => 'Sub_caste_id',
		'sub_cast_division_id'        => 'Sub_cast_division_id',
		'profile_tag_id'        => 'Profile_tag_id',
		'gotra_id'        => 'Gotra_id',
		'surname'        => 'Surname',
		'firstname'        => 'Firstname',
		'title'        => 'Title',
		'gender'        => 'Gender',
		'birthdate'        => 'Birthdate',
		'latedate'        => 'Latedate',
		'slug'        => 'Slug',
		'profile_image'        => 'Profile_image',
		'banner_image'        => 'Banner_image',
		'primary_mobile'        => 'Primary_mobile',
		'business_mobile'        => 'Business_mobile',
		'email'        => 'Email',
		'status'        => 'Status',
		'mobile_visibility'        => 'Mobile_visibility',
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
		'caste_id' =>   [
                    'data'          => 'caste_id',
                    'name'          => 'caste_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'sub_caste_id' =>   [
                    'data'          => 'sub_caste_id',
                    'name'          => 'sub_caste_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'sub_cast_division_id' =>   [
                    'data'          => 'sub_cast_division_id',
                    'name'          => 'sub_cast_division_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'profile_tag_id' =>   [
                    'data'          => 'profile_tag_id',
                    'name'          => 'profile_tag_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'gotra_id' =>   [
                    'data'          => 'gotra_id',
                    'name'          => 'gotra_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'surname' =>   [
                    'data'          => 'surname',
                    'name'          => 'surname',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'firstname' =>   [
                    'data'          => 'firstname',
                    'name'          => 'firstname',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'title' =>   [
                    'data'          => 'title',
                    'name'          => 'title',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'gender' =>   [
                    'data'          => 'gender',
                    'name'          => 'gender',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'birthdate' =>   [
                    'data'          => 'birthdate',
                    'name'          => 'birthdate',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'latedate' =>   [
                    'data'          => 'latedate',
                    'name'          => 'latedate',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'slug' =>   [
                    'data'          => 'slug',
                    'name'          => 'slug',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'profile_image' =>   [
                    'data'          => 'profile_image',
                    'name'          => 'profile_image',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'banner_image' =>   [
                    'data'          => 'banner_image',
                    'name'          => 'banner_image',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'primary_mobile' =>   [
                    'data'          => 'primary_mobile',
                    'name'          => 'primary_mobile',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'business_mobile' =>   [
                    'data'          => 'business_mobile',
                    'name'          => 'business_mobile',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'email' =>   [
                    'data'          => 'email',
                    'name'          => 'email',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'status' =>   [
                    'data'          => 'status',
                    'name'          => 'status',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'mobile_visibility' =>   [
                    'data'          => 'mobile_visibility',
                    'name'          => 'mobile_visibility',
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
        'listRoute'     => 'profile.index',
        'createRoute'   => 'profile.create',
        'storeRoute'    => 'profile.store',
        'editRoute'     => 'profile.edit',
        'updateRoute'   => 'profile.update',
        'deleteRoute'   => 'profile.destroy',
        'dataRoute'     => 'profile.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'profile.index',
        'createView'    => 'profile.create',
        'editView'      => 'profile.edit',
        'deleteView'    => 'profile.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Profile;
    }

    /**
     * Create Profile
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
            $this->attachAddress($model, $input);
            $this->attachProfession($model, $input);
            $this->attachTags($model, $input);

            return $model;
        }

        return false;
    }

    public function attachAddress($profile, $input)
    {
        return ProfileAddress::create([
            'profile_id' => $profile->id,
            'address_line1' => $input['address_line1'],
            'address_line2' => $input['address_line2'],
            'city_id' => $input['city_id'],
            'state_id' => $input['state_id'],
            'is_current' => 1,
        ]);        
    }

    public function attachProfession($profile, $input)
    {
        return ProfileProfessional::create([
            'profile_id' => $profile->id,
            'education' => $input['profession_education'] ?? null,
            'occupation' => $input['profession_occupation'] ?? null,
            'city_id' => $input['city_id'] ?? null,
            'state_id' => $input['state_id'] ?? null,
            'is_current' => 1,
        ]);        
    }

    /**
     * Update Profile
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
     * Destroy Profile
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
        $input['birthdate'] = date('Y-m-d', strtotime($input['birthdate']));
        $input['latedate'] = isset($input['latedate']) ? date('Y-m-d', strtotime($input['latedate'])) : null;
        unset($input['verify_at']);
        unset($input['user_id']);
        unset($input['last_active']);


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

    public function homeProfiles()
    {
        return $this->model->where('is_verify', 1)
            ->orderBy('id')
            ->limit(10)
            ->with(['primaryAddress', 'primaryAddress.city', 'profileTag'])
            ->get();
    }

    public function cityWiseCount()
    {
        $cities = City::where('state_id', 1)->get();
        $output = [];
        foreach($cities as $city)
        {
            $cityCout = ProfileAddress::where([
                'city_id' => $city->id,
                'is_current' => 1
            ])
            ->count();
            if($cityCout) {
                $city->cityCount = $cityCout;
                $output[] = $city;     
            }
        }

        return $output;
    }

    public function professionWiseCount()
    {
        $professions = ProfessionCategory::where('status', 1)->get();
        $output = [];
        foreach($professions as $profession)
        {
            $professionCount = ProfileProfessional::where([
                'profession_category_id' => $profession->id,
            ])
            ->count();
            if($professionCount) {
                $profession->professionCount = $professionCount;
                $output[] = $profession;     
            }
        }
        
        return $output;
    }
}