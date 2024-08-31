<?php 

namespace App\Http\Controllers\Backend\PatientReport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Repositories\PatientReport\EloquentPatientReportRepository;
use App\Models\Patient\Patient;
use App\Models\PatientReport\PatientReport;

/**
 * Class AdminPatientReportController
 */
class AdminPatientReportController extends Controller
{
    /**
     * PatientReport Repository
     *
     * @var object
     */
    public $repository;

    /**
     * Create Success Message
     *
     * @var string
     */
    protected $createSuccessMessage = "PatientReport Created Successfully!";

    /**
     * Edit Success Message
     *
     * @var string
     */
    protected $editSuccessMessage = "PatientReport Edited Successfully!";

    /**
     * Delete Success Message
     *
     * @var string
     */
    protected $deleteSuccessMessage = "PatientReport Deleted Successfully";

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->repository = new EloquentPatientReportRepository;
    }

    /**
     * PatientReport Listing
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
     * PatientReport View
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view($this->repository->setAdmin(true)->getModuleView('createView'))->with([
            'repository' => $this->repository
        ]);
    }

    /**
     * PatientReport Store
     *
     * @return \Illuminate\View\View
     */
    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->createSuccessMessage);
    }

    /**
     * PatientReport Edit
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $item = $this->repository->findOrThrowException($id, ['patientInfo', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy','reportDetails', 'reportDetails.report_type']);
        // dd($item);
        return view($this->repository->setAdmin(true)->getModuleView('editView'))->with([
            'item'          => $item,
            'repository'    => $this->repository
        ]);
    }

    /**
     * PatientReport Show
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
     * PatientReport Update
     *
     * @return \Illuminate\View\View
     */
    public function update($id, Request $request)
    {
        $status = $this->repository->update($id, $request->all());

        return redirect()->route($this->repository->setAdmin(true)->getActionRoute('listRoute'))->withFlashSuccess($this->editSuccessMessage);
    }

    /**
     * PatientReport Destroy
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
            ->addColumn('patient_id', function ($item) {
                return $item->patientInfo->name;
            })
            ->addColumn('unique_id', function ($item) {
                return $item->patientInfo->mobile;
            })
            ->addColumn('status', function ($item) {
                return getPatientReportStatus($item->is_sent);
            })
            ->addColumn('actions', function ($item) {
                return $item->admin_action_buttons;
            })
            ->make(true);
    }

    /**
     * PatientReport Edit
     *
     * @return \Illuminate\View\View
     */
    public function uploadReport($id, Request $request)
    {
        $input = $request->all();
        if(isset($input) && isset($input['reupload']) && $input['reupload'] == 1)
        {
            $patientReport = PatientReport::where('id', $id)->first();
        }
        else
        {
            $accountId = getActiveAccountId();
            $patient = Patient::create([
                'account_id' => $accountId,
                'name'      => $input['name'],
                'mobile'    => $input['mobile'],
                'is_wa'     => $input['is_wa'],
            ]);

            $patientReport = PatientReport::create([
                'account_id'    => $accountId,
                'patient_id'    => $patient->id,
                'total_cost'    => 0,
                'status'        => 2,
                'is_watsapp'    => $input['is_wa'],
                'unique_id'     => generateUniqueId(),
                'reported_on'   => getCurrentIST(),
            ]);
        }

        $hashId = hasher()->encode($patientReport->id);
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

        $file = $request->file('file');
        $file_name = 'patient-report-' . $hashId . '-' . rand(11111, 99999);
        $file_ext = $file->getClientOriginalExtension();
        $fileInfo = pathinfo($file_name);
        $filename = $fileInfo['filename'];
        $newname = $filename .'.'. $file_ext;
        $destinationPath = public_path('reports/pdf/');
            
        if($file->move($destinationPath, $newname))
        {
            $this->repository->attachReport($patientReport->id, $newname);
            return response()->json([
                'status' => true
            ]);    
        }

        return response()->json([
            'status' => false
        ]);
        
    }

    /**
     * PatientReport Edit
     *
     * @return \Illuminate\View\View
     */
    public function acceptSample(Request $request)
    {
        $input =$request->all();

        $status = $this->repository->acceptSample($input['reportId']);

        if($status)
        {
            return response()->json([
                'status' => true
            ]);   
        }

        return response()->json([
            'status' => false
        ]);
    }

    /**
     * PatientReport send WA
     *
     * @return \Illuminate\View\View
     */
    public function sendWaReport(Request $request)
    {
        $input =$request->all();

        if(isset($input['isApproved']) && $input['isApproved'] == 0)
        {
            $status = $this->repository->rejectReport($input['reportId']);
            return response()->json([
                'status' => false
            ]);   
        }
        
        $status = $this->repository->sendWaReport($input['reportId']);

        if($status)
        {
            return response()->json([
                'status' => true
            ]);   
        }

        return response()->json([
            'status' => false
        ]);
    }
}