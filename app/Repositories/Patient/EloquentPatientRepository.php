<?php 

namespace App\Repositories\Patient;

/**
 * Class EloquentPatientRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Patient\Patient;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;
use App\Models\Report_types\Report_types;
use App\Models\PatientReport\PatientReport;
use App\Models\PatientReportDetails\PatientReportDetails;
use App\Models\SampleCollectionDetails\SampleCollectionDetails;

class EloquentPatientRepository extends DbRepository
{
    /**
     * Patient Model
     *
     * @var Object
     */
    public $model;

    /**
     * Patient Title
     *
     * @var string
     */
    public $moduleTitle = 'Patient';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        'id'              => 'Id',
		'name'            => 'Name',
		'mobile'          => 'Mobile',
		'gender'          => 'Gender',
		'age'             => 'Age',
		'address'         => 'Address',
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
		'name' =>   [
                    'data'          => 'name',
                    'name'          => 'name',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'mobile' =>   [
                    'data'          => 'mobile',
                    'name'          => 'mobile',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'gender' =>   [
                    'data'          => 'gender',
                    'name'          => 'gender',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'age' =>   [
                    'data'          => 'age',
                    'name'          => 'age',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'address' =>   [
                    'data'          => 'address',
                    'name'          => 'address',
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
        'listRoute'     => 'patient.index',
        'createRoute'   => 'patient.create',
        'storeRoute'    => 'patient.store',
        'editRoute'     => 'patient.edit',
        'updateRoute'   => 'patient.update',
        'deleteRoute'   => 'patient.destroy',
        'dataRoute'     => 'patient.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'patient.index',
        'createView'    => 'patient.create',
        'editView'      => 'patient.edit',
        'deleteView'    => 'patient.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Patient;
    }

    /**
     * Create Patient
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
            $patientReport = $this->createPatientReportDetails($model, $input);
            if($input['collect_sample'] == 1)
            {
                $creatorCollector = $this->createCollector($model, $input);
                $patientReport->sample_collection_detail_id = $creatorCollector->id;
                
                $patientReport->collected_on    = date('Y-m-d H:i:s', strtotime($input['collected_at']));
                $patientReport->received_on     = null;

                $patientReport->save();
            }

            return $model;
        }

        return false;
    }

    /**
     * Create Collector
     * 
     * @param object $patient
     * @param array $input
     * 
     * @return object
     */
    public function createCollector($patient, $input)
    {
        return SampleCollectionDetails::create([
            'account_id'            => $patient->account_id,
            'sample_collector_id'   => $input['collector_id'],
            'patient_id'            => $patient->id,
            'collected_at'          => $input['collected_at'],
            'collected_from'        => $input['collection_location'],
            'pickup_cost'           => $input['pickup_cost'],
            'note'                  => $input['collection_note']
        ]);
    }

    /**
     * Create Patient Report Details
     * 
     * @param object $patient
     * @param array $input
     * 
     * @return object
     */
    public function createPatientReportDetails($patient, $input)
    {
        $reportDetails  = [];
        $accounntId     = getActiveAccountId();
        $patientReport  = PatientReport::create([
            'account_id'    => $accounntId,
            'patient_id'    => $patient->id, 
            'unique_id'     => generateUniqueId(),
            'status'        => 0,
            'is_watsapp'    => 1,
            'received_on'   => date('Y-m-d H:i:s'),
            'collected_on'  => date('Y-m-d H:i:s'),
        ]);

        $totalCost = 0;
        foreach($input['reportType'] as $reportId)
        {
            $reportInfo = Report_types::where('id', $reportId)->first();
            $reportDetails[] = [
                'account_id'        => $accounntId,
                'patient_id'        => $patient->id,
                'patient_report_id' => $patientReport->id,
                'report_type_id'    => $reportInfo->id,
                'total_cost'        => $reportInfo->cost   
            ];

            $totalCost = $totalCost + $reportInfo->cost;
        }

        $patientReport->total_cost = $totalCost;
        $patientReport->save();

        PatientReportDetails::insert($reportDetails);

        return $patientReport;
    }

    /**
     * Update Patient
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
     * Destroy Patient
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
}