<?php 

namespace App\Repositories\Invoice;

/**
 * Class EloquentInvoiceRepository
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\Invoice\Invoice;
use App\Repositories\DbRepository;
use App\Exceptions\GeneralException;

class EloquentInvoiceRepository extends DbRepository
{
    /**
     * Invoice Model
     *
     * @var Object
     */
    public $model;

    /**
     * Invoice Title
     *
     * @var string
     */
    public $moduleTitle = 'Invoice';

    /**
     * Table Headers
     *
     * @var array
     */
    public $tableHeaders = [
        		'id'        => 'Id',
		'account_id'        => 'Account_id',
		'patient_id'        => 'Patient_id',
		'patient_report_id'        => 'Patient_report_id',
		'pickup_cost'        => 'Pickup_cost',
		'sub_total'        => 'Sub_total',
		'gst'        => 'Gst',
		'gst_total'        => 'Gst_total',
		'total'        => 'Total',
		'paid_by'        => 'Paid_by',
		'paid_ref'        => 'Paid_ref',
		'invoice_number'        => 'Invoice_number',
		'notes'        => 'Notes',
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
		'patient_report_id' =>   [
                    'data'          => 'patient_report_id',
                    'name'          => 'patient_report_id',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'pickup_cost' =>   [
                    'data'          => 'pickup_cost',
                    'name'          => 'pickup_cost',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'sub_total' =>   [
                    'data'          => 'sub_total',
                    'name'          => 'sub_total',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'gst' =>   [
                    'data'          => 'gst',
                    'name'          => 'gst',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'gst_total' =>   [
                    'data'          => 'gst_total',
                    'name'          => 'gst_total',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'total' =>   [
                    'data'          => 'total',
                    'name'          => 'total',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'paid_by' =>   [
                    'data'          => 'paid_by',
                    'name'          => 'paid_by',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'paid_ref' =>   [
                    'data'          => 'paid_ref',
                    'name'          => 'paid_ref',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'invoice_number' =>   [
                    'data'          => 'invoice_number',
                    'name'          => 'invoice_number',
                    'searchable'    => true,
                    'sortable'      => true
                ],
		'notes' =>   [
                    'data'          => 'notes',
                    'name'          => 'notes',
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
        'listRoute'     => 'invoice.index',
        'createRoute'   => 'invoice.create',
        'storeRoute'    => 'invoice.store',
        'editRoute'     => 'invoice.edit',
        'updateRoute'   => 'invoice.update',
        'deleteRoute'   => 'invoice.destroy',
        'dataRoute'     => 'invoice.get-list-data'
    ];

    /**
     * Module Views
     *
     * @var array
     */
    public $moduleViews = [
        'listView'      => 'invoice.index',
        'createView'    => 'invoice.create',
        'editView'      => 'invoice.edit',
        'deleteView'    => 'invoice.destroy',
    ];

    /**
     * Construct
     *
     */
    public function __construct()
    {
        $this->model = new Invoice;
    }

    /**
     * Create Invoice
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
     * Update Invoice
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
     * Destroy Invoice
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