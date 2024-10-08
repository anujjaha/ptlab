<?php 

namespace App\Repositories\General;

/**
 * Class EloquentGeneralRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use File;
use App\Models\General\General;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentGeneralRepository extends DbRepository
{
    /**
     * General Model
     *
     * @var Object
     */
    public $model;

    /**
     * General Title
     *
     * @var string
     */
    public $moduleTitle = 'General';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        	'id'        => 'Id',
    		'title'     => 'Title',
    		'name'      => 'Name',
    		'address'   => 'Address',
            'primary_contact'   => 'Phone',
    		'website'   => 'Website',
            "actions"   => "Actions"
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
       'primary_contact' =>   [
                    'data'          => 'primary_contact',
                    'name'          => 'primary_contact',
                    'searchable'    => false,
                    'sortable'      => false
                ],
		'website' =>   [
                    'data'          => 'website',
                    'name'          => 'website',
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
        'listRoute'     => 'general.index',
        'createRoute'   => 'general.create',
        'storeRoute'    => 'general.store',
        'editRoute'     => 'general.edit',
        'updateRoute'   => 'general.update',
        'deleteRoute'   => 'general.destroy',
        'dataRoute'     => 'general.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'general.index',
        'createView'    => 'general.create',
        'editView'      => 'general.edit',
        'deleteView'    => 'general.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new General;
    }

    /**
     * Create General
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
            $model->web_qr = $this->generateWebsiteQr($model);
            $model->email_qr = $this->generateEmailQr($model);
            $model->gmap_qr = $this->generateGmapQr($model);
            $model->phone_qr = $this->generatePhoneQr($model);
            $model->save();

            return $model;
        }

        return false;
    }

    /**
     * Update General
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
     * Destroy General
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

    public function generateGmapQr($model = null)
    {
        if(isset($model) && isset($model->id) && isset($model->gmap) && !empty($model->gmap))
        {
            $fileName = md5($model->id) .'_'. time() . '_map.png';
            $this->checkAndCreateMediaPath(public_path() . '/general');
            \QRCode::url($model->gmap)
                    ->setErrorCorrectionLevel('H')
                    ->setSize(2)
                    ->setOutfile(public_path() . '/general/'. $fileName)
                    ->setMargin(6)
                    ->png();
            return $fileName;    
        }
        
        return null;
    }

    public function generateEmailQr($model = null)
    {
        if(isset($model) && isset($model->id) && isset($model->email) && !empty($model->email))
        {
            $fileName = md5($model->id) .'_'. time() . '_email.png';
            $this->checkAndCreateMediaPath(public_path() . '/general');
            $subject = 'Contact to ' . $model->primary_contact;
            $body = 'I am contacting to '. $model->primary_contact;
            \QRCode::email($model->email, $subject, $body)
                    ->setErrorCorrectionLevel('H')
                    ->setSize(2)
                    ->setOutfile(public_path() . '/general/'. $fileName)
                    ->setMargin(6)
                    ->png();
            return $fileName;    
        }
        
        return null;
    }

    public function generateWebsiteQr($model = null)
    {
        if(isset($model) && isset($model->id) && isset($model->website) && !empty($model->website))
        {
            $fileName = md5($model->id) .'_'. time() . '_web.png';
            $this->checkAndCreateMediaPath(public_path() . '/general');
            \QRCode::url($model->website)
                    ->setErrorCorrectionLevel('H')
                    ->setSize(2)
                    ->setOutfile(public_path() . '/general/'. $fileName)
                    ->setMargin(6)
                    ->png();
            return $fileName;    
        }
        
        return null;
    }

    public function generatePhoneQr($model = null)
    {
        if(isset($model) && isset($model->id) && isset($model->primary_contact) && !empty($model->primary_contact))
        {
            $fileName = md5($model->id) .'_'. time() . '_phone.png';
            $this->checkAndCreateMediaPath(public_path() . '/general');
            \QRCode::phone($model->primary_contact)
                    ->setErrorCorrectionLevel('H')
                    ->setSize(2)
                    ->setOutfile(public_path() . '/general/'. $fileName)
                    ->setMargin(6)
                    ->png();
            return $fileName;    
        }
        
        return null;
    }

    public function checkAndCreateMediaPath($path = null)
    {
        if(isset($path))
        {
            File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);    
        }
        
        return true;
    }
}