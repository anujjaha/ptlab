<?php 

namespace App\Repositories\PatientReport;

/**
 * Class EloquentPatientReportRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\PatientReport\PatientReport;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;
use App\Models\Account\Account;
use App\Repositories\Whatsapp\EloquentWhatsappRepository;

class EloquentPatientReportRepository extends DbRepository
{
    /**
     * PatientReport Model
     *
     * @var Object
     */
    public $model;

    /**
     * PatientReport Title
     *
     * @var string
     */
    public $moduleTitle = 'PatientReport';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        'id'               => 'Id',
		'unique_id'        => 'Report ID',
        'patient_id'       => 'Patient Info',
        'details'          => 'Details',
		'total_cost'       => 'Total Cost',
		'status'           => 'Status',
        'collected_on'     => 'Collected At',
        'reported_on'      => 'Completed At',
		'sent_count'       => 'Message Sent',
        "actions"          => "Actions"
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

        'unique_id' =>   [
                    'data'          => 'unique_id',
                    'name'          => 'unique_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
        'patient_id' =>   [
                    'data'          => 'patient_id',
                    'name'          => 'patient_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
        'sample_collection_detail_id' =>   [
                    'data'          => 'sample_collection_detail_id',
                    'name'          => 'sample_collection_detail_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'total_cost' =>   [
                    'data'          => 'total_cost',
                    'name'          => 'total_cost',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'status' =>   [
                    'data'          => 'status',
                    'name'          => 'status',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'collected_on' =>   [
                    'data'          => 'collected_on',
                    'name'          => 'collected_on',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'reported_on' =>   [
                    'data'          => 'reported_on',
                    'name'          => 'reported_on',
                    'searchable'    => true,
                    'sortable'      => true
                ],
        'sent_count' =>   [
                    'data'          => 'sent_count',
                    'name'          => 'sent_count',
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
        'listRoute'     => 'patientreport.index',
        'createRoute'   => 'patientreport.create',
        'storeRoute'    => 'patientreport.store',
        'editRoute'     => 'patientreport.edit',
        'updateRoute'   => 'patientreport.update',
        'deleteRoute'   => 'patientreport.destroy',
        'dataRoute'     => 'patientreport.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'patientreport.index',
        'createView'    => 'patientreport.create',
        'editView'      => 'patientreport.edit',
        'deleteView'    => 'patientreport.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new PatientReport;
    }

    /**
     * Create PatientReport
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
     * Update PatientReport
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
     * Destroy PatientReport
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
        $accountId = getActiveAccountId();
        if($accountId)
        {
            return $this->model->select($this->getTableFields())
                ->with(['reportDetails', 'reportDetails.report_type', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy', 'patientInfo'])
                ->where('account_id', $accountId)
                ->get();    
        }
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

    public function attachReport($id, $file)
    {
        $this->model->where('id', $id)
            ->update([
                'attachment'        => $file,
                'status'            => 2,
                'attachment_time'   => date('Y-m-d h:i:s'),
                'reported_on'       => date('Y-m-d h:i:s')
            ]);
    }

    public function acceptSample($reportId = null)
    {
        return $this->model->where('id', $reportId)
            ->update([
                'status' => 1,
                'received_on' => date('Y-m-d h:i:s')
            ]);
    }

    public function sendWaReport($reportId = null)
    {
        $reportId       = hasher()->decode($reportId);
        $patientReport  = $this->model->where('id', $reportId)->with(['patientInfo'])->first();
        $accountInfo    = Account::where('id', $patientReport->account_id)->with(['accountConfig'])->first();

        $waRepo     = new EloquentWhatsappRepository();
        $mobile     = $patientReport->patientInfo->mobile;
        $mediaUrl   = url('reports/pdf/'.$patientReport->attachment);

        $waRepo->sendMediaWaMsg(
            $accountInfo,
            $accountInfo->accountConfig->wa_template_url, 
            $mobile,
            [
                "type"              => "richTemplate",
                "templateId"        => $accountInfo->accountConfig->wa_template_id,
                "templateLanguage"  => "en",
                "templateArgs"      => [
                    url('reports/pdf/'.$patientReport->attachment),
                    $patientReport->patientInfo->name,
                    'P T MIRANI',
                    'P T MIRANI',
                ],
                "sender_phone" => "91".  $mobile
            ],
            [
                'body_content'  => 'test',
                'media_url'     => $mediaUrl
            ]
        );

        $patientReport->watsapp_time = date('Y-m-d h:i:s');
        $patientReport->sent_count = $patientReport->sent_count ? $patientReport->sent_count + 1 : 1;
        $patientReport->status = 3;
        $patientReport->save();

        return true;
    }
}