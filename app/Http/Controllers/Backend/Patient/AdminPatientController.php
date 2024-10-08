<?php 

namespace App\Http\Controllers\Backend\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Repositories\Patient\EloquentPatientRepository;
use App\Repositories\Report_types\EloquentReport_typesRepository;
use App\Repositories\SampleCollector\EloquentSampleCollectorRepository;

/**
 * Class AdminPatientController
 */
class AdminPatientController extends Controller
{
    /**
     * Patient Repository
     *
     * @var object
     */
    public $repository;

    /**
     * Report Repo
     *
     * @var object
     */
    public $reportRepo;

    /**
     * Collector Repo
     *
     * @var object
     */
    public $collectorRepo;

    /**
     * Create Success Message
     *
     * @var string
     */
    protected $createSuccessMessage = "Patient Created Successfully!";

    /**
     * Edit Success Message
     *
     * @var string
     */
    protected $editSuccessMessage = "Patient Edited Successfully!";

    /**
     * Delete Success Message
     *
     * @var string
     */
    protected $deleteSuccessMessage = "Patient Deleted Successfully";

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->repository = new EloquentPatientRepository;
        $this->reportRepo = new EloquentReport_typesRepository;
        $this->collectorRepo = new EloquentSampleCollectorRepository;
    }

    /**
     * Patient Listing
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->repository->setAdmin(true)->getModuleView('listView'))->with([
            'repository' => $this->repository
        ]);
    }

    /**
     * Patient View
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $reportTypes = $this->reportRepo->getReportTypes();
        $collectors  = $this->collectorRepo->getAllCollectors();
        $collectorOpts = [];

        if($collectors)
        {
            foreach($collectors as $collector)
            {
                $collectorOpts[$collector->id] = $collector->name . ' (' . $collector->mobile. ')';
            }
        }

        return view($this->repository->setAdmin(true)->getModuleView('createView'))->with([
            'repository' => $this->repository,
            'reportTypes' => $reportTypes,
            'collectorOpts'  => $collectorOpts,
        ]);
    }

    /**
     * Patient Store
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->createSuccessMessage);
    }

    /**
     * Patient Edit
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = $this->repository->findOrThrowException($id);

        return view($this->repository->setAdmin(true)->getModuleView('editView'))->with([
            'item'          => $item,
            'repository'    => $this->repository
        ]);
    }

    /**
     * Patient Show
     *
     * @return \Illuminate\View\View
     */
    public function show($id, Request $request)
    {
        $item = $this->repository->findOrThrowException($id);

        return view($this->repository->setAdmin(true)->getModuleView('editView'))->with([
            'item'          => $item,
            'repository'    => $this->repository
        ]);
    }


    /**
     * Patient Update
     *
     * @return \Illuminate\View\View
     */
    public function update($id, Request $request)
    {
        $status = $this->repository->update($id, $request->all());

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->editSuccessMessage);
    }

    /**
     * Patient Destroy
     *
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $status = $this->repository->destroy($id);

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->deleteSuccessMessage);
    }

    /**
     * Get Table Data
     *
     * @return json|mixed
     */
    public function getTableData()
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['id', 'sort'])
            ->addColumn('actions', function ($item) {
                return $item->admin_action_buttons;
            })
            ->make(true);
    }
}