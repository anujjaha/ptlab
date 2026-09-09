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
use App\Models\ProfileTag\ProfileTag;

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
        'id'        => 'Id',
		'gotra_id'        => 'Gotra',
		'surname'        => 'Name',
		'gender'        => 'Gender',
		'birthdate'        => 'Birthdate',
		'profile_image'        => 'Profile_image',
		'primary_mobile'        => 'Primary_mobile',
		'email'        => 'Email',
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
        'profile_image' =>   [
                    'data'          => 'profile_image',
                    'name'          => 'profile_image',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'primary_mobile' =>   [
                    'data'          => 'primary_mobile',
                    'name'          => 'primary_mobile',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'email' =>   [
                    'data'          => 'email',
                    'name'          => 'email',
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
            'education' => $input['education'] ?? null,
            'occupation' => $input['occupation'] ?? null,
            'company' => $input['company'] ?? null,
            'overall_experience' => $input['experience'] ?? null,
            'job_title' => $input['job_title'] ?? null,
            'is_government' => $input['is_government_job'] ?? null,
            'is_retired' => $input['is_retired'] ?? null,
            'is_business' => $input['is_business'] ?? null,
            'business_details' => $input['business_details'] ?? null,
            'business_title' => $input['business_title'] ?? null,
            'business_started' => $input['business_started'] ?? null,
            'business_website' => $input['business_website'] ?? null,
            'is_current' => 1,
        ]);        
    }

    public function attachTags($profile, $input)
    {
        $tagData = [];
        if(isset($input['tags']) && count($input['tags']))
        {
            foreach($input['tags'] as $tag)
            {
                $tagData[] = [
                    'profile_id' => $profile->id,
                    'tag_id'     => $tag,
                ];
            }
            return ProfileTag::insert($tagData);
        }
        
        return true;
    }

    public function updateAddress($profile, $input)
    {
        return ProfileAddress::where('profile_id', $profile->id)
        ->update([
            'address_line1' => $input['address_line1'],
            'address_line2' => $input['address_line2'],
            'city_id' => $input['city_id'],
            'state_id' => $input['state_id'],
            'is_current' => 1,
        ]);        
    }

    public function updateProfession($profile, $input)
    {
        return ProfileProfessional::where('profile_id', $profile->id)->update([
            'education' => $input['education'] ?? null,
            'occupation' => $input['occupation'] ?? null,
            'company' => $input['company'] ?? null,
            'job_title' => $input['job_title'] ?? null,
            'overall_experience' => $input['experience'] ?? null,
            'is_government' => $input['is_government_job'] ?? null,
            'is_retired' => $input['is_retired'] ?? null,
            'is_business' => $input['is_business'] ?? null,
            'business_details' => $input['business_details'] ?? null,
            'business_title' => $input['business_title'] ?? null,
            'business_started' => $input['business_started'] ?? null,
            'business_website' => $input['business_website'] ?? null,
        ]);        
    }

    public function updateTags($profile, $input)
    {
        return $profile->profileTag()->sync($input['tags'] ?? []);
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

            $this->updateAddress($model, $input);
            $this->updateProfession($model, $input);
            $this->updateTags($model, $input);

           

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

        if (isset($input['profile_image']) && $input['profile_image']->isValid()) 
        {
            $file = $input['profile_image'];
            $extension = $file->getClientOriginalExtension();
            $fileName = 'profile_photo_' . uniqid() . '_' . time() . '.' . $extension;
            $path = base_path('../public_html/upload/profiles/images');

            $file->move($path, $fileName);
            $input['profile_image'] = asset('upload/profiles/images/'.$fileName);
        }

        if (isset($input['banner_image']) && $input['banner_image']->isValid()) 
        {
            $file = $input['banner_image'];
            $extension = $file->getClientOriginalExtension();
            $fileName = 'banner_photo_' . uniqid() . '_' . time() . '.' . $extension;
            $path = base_path('../public_html/upload/profiles/images');

            $file->move($path, $fileName);
            $input['banner_image'] = asset('upload/profiles/images/'.$fileName);
        }

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
        $profiles =  $this->model->where('is_verify', 1)
            ->orderBy('id')
            ->inRandomOrder()
            ->limit(10000)
            ->with(['primaryAddress', 'primaryAddress.city', 'profileTag'])
            ->get();
        $output = [];
        foreach($profiles as $profile)
        {
            $profile->primary_mobile = substr($profile->primary_mobile, 0, 6). 'XXXX';
            $output[] = $profile;
        }
        return $output;
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