<?php 

namespace App\Repositories\PatientReportDetails;

/**
 * Class EloquentPatientReportDetailsRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\PatientReportDetails\PatientReportDetails;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentPatientReportDetailsRepository extends DbRepository
{
    /**
     * PatientReportDetails Model
     *
     * @var Object
     */
    public $model;

    /**
     * PatientReportDetails Title
     *
     * @var string
     */
    public $moduleTitle = 'PatientReportDetails';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'account_id'        => 'Account_id',
		'patient_id'        => 'Patient_id',
		'report_type_id'        => 'Report_type_id',
		'total_cost'        => 'Total_cost',
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
		'patient_id' =>   [
                    'data'          => 'patient_id',
                    'name'          => 'patient_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'report_type_id' =>   [
                    'data'          => 'report_type_id',
                    'name'          => 'report_type_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'total_cost' =>   [
                    'data'          => 'total_cost',
                    'name'          => 'total_cost',
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
        'listRoute'     => 'patientreportdetails.index',
        'createRoute'   => 'patientreportdetails.create',
        'storeRoute'    => 'patientreportdetails.store',
        'editRoute'     => 'patientreportdetails.edit',
        'updateRoute'   => 'patientreportdetails.update',
        'deleteRoute'   => 'patientreportdetails.destroy',
        'dataRoute'     => 'patientreportdetails.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'patientreportdetails.index',
        'createView'    => 'patientreportdetails.create',
        'editView'      => 'patientreportdetails.edit',
        'deleteView'    => 'patientreportdetails.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new PatientReportDetails;
    }

    /**
     * Create PatientReportDetails
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
     * Update PatientReportDetails
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
     * Destroy PatientReportDetails
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