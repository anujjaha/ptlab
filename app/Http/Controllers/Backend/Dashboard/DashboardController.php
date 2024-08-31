<?php
namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PatientReport\PatientReport;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $todayReports = PatientReport::whereNull('is_sent')
        ->with(['patientInfo', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy'])->get();
        
        // $todayPending               = PatientReport::whereNotNull('sample_collection_detail_id')->whereDate('collected_on', date('Y-m-d'))->with(['patientInfo', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy'])
        //     ->whereNull('received_on')
        //     ->get();
        // $tomorrowPending            = PatientReport::whereNotNull('sample_collection_detail_id')->whereDate('collected_on', date('Y-m-d', strtotime('+1 day')))->with(['patientInfo', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy'])
        //     ->whereNull('received_on')
        //     ->get();

        // $dayAfterTomorrowPending    = PatientReport::whereNotNull('sample_collection_detail_id')->whereDate('collected_on', date('Y-m-d', strtotime('+2 day')))->with(['patientInfo', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy'])
        //     ->whereNull('received_on')
        //     ->get();
        // $extraPending               = PatientReport::whereNotNull('sample_collection_detail_id')->whereDate('collected_on', date('Y-m-d', strtotime('+3 day')))->with(['patientInfo', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy'])
        //     ->whereNull('received_on')
        //     ->get();
        
        // $backDatePending = PatientReport::whereNull('received_on')
        //     ->whereNotNull('sample_collection_detail_id')
        //     ->whereDate('collected_on', '<', date('Y-m-d'))
        //     ->with(['patientInfo', 'sampleCollectionDetail', 'sampleCollectionDetail.sampleCollectedBy'])
        //     ->get();

        return view('backend.dashboard.index')->with([
            'todayReports'              => $todayReports,  
            // 'todayPending'              => $todayPending, 
            // 'tomorrowPending'           => $tomorrowPending,
            // 'dayAfterTomorrowPending'   => $dayAfterTomorrowPending,
            // 'extraPending'              => $extraPending,
            // 'backDatePending'           => $backDatePending,
        ]);
    }
}