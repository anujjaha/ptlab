@extends('backend.layouts.app')

@section ('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h3>Dashboard</h3>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quick Dashboard

            </h3>
            <div class="card-tools">
                <a target="_blank" href="{!! route('admin.patient.create') !!}" class="btn btn-xs btn-success">
                    Add New
                </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">
                                Today ({!! date('d M Y') !!})
                            </div>
                        </div>
                            <div class="card-body">
                            <table class="table table-content">
                                <tr>
                                    <td>
                                        Unique ID
                                    </td>
                                    <td>Name</td>
                                    <td>Details</td>
                                    <td>Status</td>
                                    <td>Sample Collection Date</td>
                                    <td>Sample Submitted</td>
                                    <td>Report Generated</td>
                                    <td>Action</td>
                                </tr>
                                @if($todayReports)
                                    @foreach($todayReports as $todayReport)
                                        <tr>
                                            <td>
                                                {!! $todayReport->unique_id !!}
                                                <p>
                                                    {!! $todayReport->sample_collection_detail_id ? $todayReport->sampleCollectionDetail->sampleCollectedBy->name : 'SELF' !!}
                                                </p>
                                            </td>
                                            <td>
                                                @if($todayReport->patientInfo)
                                                    {!! $todayReport->patientInfo->name !!} ({!! $todayReport->patientInfo->mobile !!})
                                                @endif
                                            </td>
                                            <td>
                                                <?php
                                                $reportHashId = hasher()->encode($todayReport->id);
                                                $html = '';
                                                if($todayReport->reportDetails)
                                                {
                                                    foreach($todayReport->reportDetails as $details)
                                                    {
                                                        $html .= '<p>' . $details->report_type->title . ' ('.$details->total_cost.')</p>';
                                                    }
                                                }
                                                echo $html;
                                                ?>
                                            </td>
                                            <td>{!! getPatientReportStatus($todayReport->status) !!}</td>

                                            <td>{!! getReadableDateTime($todayReport->collected_on) !!}</td>

                                            <td>{!! $todayReport->received_on ? getReadableDateTime($todayReport->received_on) : '-' !!}</td>

                                            <td>{!! $todayReport->reported_on ?  getReadableDateTime($todayReport->reported_on) : '-' !!}</td>
                                            <td>
                                                <a href="{!! route('admin.patientreport.edit', $todayReport->id) !!}"><i class="fa fa-edit"></i></a>

                                                @if($todayReport->attachment)
                                                    <a target="_blank" href="<?= url('reports/pdf/'.$todayReport->attachment);?>" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a>

                                                    <a  onclick="sendWaReport('<?= $reportHashId;?>')" href="javascript:void(0);" class="btn btn-xs btn-primary"><i class="fa fa-paper-plane" data-toggle="tooltip" data-placement="top" title="Send"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <?= date('d M ');?> 
                            @if($todayPending)
                                ({!! count($todayPending) !!})
                            @endif
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <?= date('d M ',strtotime('+1 day'));?>
                            @if($tomorrowPending)
                                ({!! count($tomorrowPending) !!})
                            @endif
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <?= date('d M ',strtotime('+2 day'));?>
                            @if($dayAfterTomorrowPending)
                                ({!! count($dayAfterTomorrowPending) !!})
                            @endif
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-extra-tab" data-bs-toggle="pill" data-bs-target="#pills-extra" type="button" role="tab" aria-controls="pills-extra" aria-selected="false">
                            <?= date('d M ',strtotime('+3 day'));?>
                            @if($extraPending)
                                ({!! count($extraPending) !!})
                            @endif
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          <table class="table table-content">
                                <tr>
                                    <td>Unique ID</td>
                                    <td>Name</td>
                                    <td>Details</td>
                                    <td>Status</td>
                                    <td>Booked At</td>
                                    <td>Completed At</td>
                                    <td>Action</td>
                                </tr>
                                @if($todayPending)
                                    @foreach($todayPending as $todayReport)
                                        <tr>
                                            <td>{!! $todayReport->unique_id !!}</td>
                                            <td>{!! $todayReport->patientInfo->name !!} ({!! $todayReport->patientInfo->mobile !!})</td>
                                            <td>
                                                <?php
                                                $html = '';
                                                if($todayReport->reportDetails)
                                                {
                                                    foreach($todayReport->reportDetails as $details)
                                                    {
                                                        $html .= '<p>' . $details->report_type->title . ' ('.$details->total_cost.')</p>';
                                                    }
                                                }
                                                echo $html;
                                                ?>
                                            </td>
                                            <td>{!! getPatientReportStatus($todayReport->status) !!}</td>
                                            <td>
                                                @if($todayReport->received_on)
                                                    {!! getReadableDateTime($todayReport->received_on) !!}
                                                @else
                                                    <a onclick="acceptReport({!! $todayReport->id !!})" data-id="{!! $todayReport->id !!}" href="javascript:void(0);" class="btn btn-xs btn-primary">
                                                        Accept
                                                    </a>
                                                @endif
                                               
                                            </td>
                                            <td>{!! $todayReport->attachment_time ?  getReadableDateTime($todayReport->attachment_time) : '-' !!}</td>
                                            <td>
                                                <a href="{!! route('admin.patientreport.edit', $todayReport->id) !!}"><i class="fa fa-edit"></i></a>

                                                @if($todayReport->attachment)
                                                    <a target="_blank" href="<?= url('reports/pdf/'.$todayReport->attachment);?>" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table table-content">
                                <tr>
                                    <td>Unique ID</td>
                                    <td>Name</td>
                                    <td>Details</td>
                                    <td>Status</td>
                                    <td>Booked At</td>
                                    <td>Completed At</td>
                                    <td>Action</td>
                                </tr>
                                @if($tomorrowPending)
                                    @foreach($tomorrowPending as $todayReport)
                                        <tr>
                                            <td>{!! $todayReport->unique_id !!}</td>
                                            <td>{!! $todayReport->patientInfo->name !!} ({!! $todayReport->patientInfo->mobile !!})</td>
                                            <td>
                                                <?php
                                                $html = '';
                                                if($todayReport->reportDetails)
                                                {
                                                    foreach($todayReport->reportDetails as $details)
                                                    {
                                                        $html .= '<p>' . $details->report_type->title . ' ('.$details->total_cost.')</p>';
                                                    }
                                                }
                                                echo $html;
                                                ?>
                                            </td>
                                            <td>{!! getPatientReportStatus($todayReport->status) !!}</td>
                                            <!-- <td>{!! getReadableDateTime($todayReport->received_on) !!}</td> -->
                                            <td>
                                                @if($todayReport->received_on)
                                                    {!! getReadableDateTime($todayReport->received_on) !!}
                                                @else
                                                    <a onclick="acceptReport({!! $todayReport->id !!})" data-id="{!! $todayReport->id !!}" href="javascript:void(0);" class="btn btn-xs btn-primary">
                                                        Accept
                                                    </a>
                                                @endif
                                               
                                            </td>
                                            <td>{!! $todayReport->attachment_time ?  getReadableDateTime($todayReport->attachment_time) : '-' !!}</td>
                                            <td>
                                                <a href="{!! route('admin.patientreport.edit', $todayReport->id) !!}"><i class="fa fa-edit"></i></a>

                                                @if($todayReport->attachment)
                                                    <a target="_blank" href="<?= url('reports/pdf/'.$todayReport->attachment);?>" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                      </div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table table-content">
                                <tr>
                                    <td>Unique ID</td>
                                    <td>Collector Info</td>
                                    <td>Name</td>
                                    <td>Details</td>
                                    <td>Status</td>
                                    <td>Booked At</td>
                                    <td>Completed At</td>
                                    <td>Action</td>
                                </tr>
                                @if($dayAfterTomorrowPending)
                                    @foreach($dayAfterTomorrowPending as $todayReport)
                                        <tr>
                                            <td>{!! $todayReport->unique_id !!}</td>
                                            <td>{!! $todayReport->sampleCollectionDetail->sampleCollectedBy->name !!}</td>
                                            <td>{!! $todayReport->patientInfo->name !!} ({!! $todayReport->patientInfo->mobile !!})</td>
                                            <td>
                                                <?php
                                                $html = '';
                                                if($todayReport->reportDetails)
                                                {
                                                    foreach($todayReport->reportDetails as $details)
                                                    {
                                                        $html .= '<p>' . $details->report_type->title . ' ('.$details->total_cost.')</p>';
                                                    }
                                                }
                                                echo $html;
                                                ?>
                                            </td>
                                            <td>{!! getPatientReportStatus($todayReport->status) !!}</td>
                                            <td>
                                                @if($todayReport->received_on)
                                                    {!! getReadableDateTime($todayReport->received_on) !!}
                                                @else
                                                    <a onclick="acceptReport({!! $todayReport->id !!})" data-id="{!! $todayReport->id !!}" href="javascript:void(0);" class="btn btn-xs btn-primary">
                                                        Accept
                                                    </a>
                                                @endif
                                               
                                            </td>
                                            <!-- <td>{!! getReadableDateTime($todayReport->received_on) !!}</td> -->
                                            <td>{!! $todayReport->attachment_time ?  getReadableDateTime($todayReport->attachment_time) : '-' !!}</td>
                                            <td>
                                                <a href="{!! route('admin.patientreport.edit', $todayReport->id) !!}"><i class="fa fa-edit"></i></a>

                                                @if($todayReport->attachment)
                                                    <a target="_blank" href="<?= url('reports/pdf/'.$todayReport->attachment);?>" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                      </div>
                      <div class="tab-pane fade" id="pills-extra" role="tabpanel" aria-labelledby="pills-extra-tab">
                        <table class="table table-content">
                                <tr>
                                    <td>Unique ID</td>
                                    <td>Name</td>
                                    <td>Details</td>
                                    <td>Status</td>
                                    <td>Booked At</td>
                                    <td>Completed At</td>
                                    <td>Action</td>
                                </tr>
                                @if($extraPending)
                                    @foreach($extraPending as $todayReport)
                                        <tr>
                                            <td>{!! $todayReport->unique_id !!}</td>
                                            <td>{!! $todayReport->patientInfo->name !!} ({!! $todayReport->patientInfo->mobile !!})</td>
                                            <td>
                                                <?php
                                                $html = '';
                                                if($todayReport->reportDetails)
                                                {
                                                    foreach($todayReport->reportDetails as $details)
                                                    {
                                                        $html .= '<p>' . $details->report_type->title . ' ('.$details->total_cost.')</p>';
                                                    }
                                                }
                                                echo $html;
                                                ?>
                                            </td>
                                            <td>{!! getPatientReportStatus($todayReport->status) !!}</td>
                                            <!-- <td>{!! getReadableDateTime($todayReport->received_on) !!}</td> -->
                                            <td>
                                                @if($todayReport->received_on)
                                                    {!! getReadableDateTime($todayReport->received_on) !!}
                                                @else
                                                    <a onclick="acceptReport({!! $todayReport->id !!})" data-id="{!! $todayReport->id !!}" href="javascript:void(0);" class="btn btn-xs btn-primary">
                                                        Accept
                                                    </a>
                                                @endif
                                               
                                            </td>
                                            <td>{!! $todayReport->attachment_time ?  getReadableDateTime($todayReport->attachment_time) : '-' !!}</td>
                                            <td>
                                                <a href="{!! route('admin.patientreport.edit', $todayReport->id) !!}"><i class="fa fa-edit"></i></a>

                                                @if($todayReport->attachment)
                                                    <a target="_blank" href="<?= url('reports/pdf/'.$todayReport->attachment);?>" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">Pending Reports</div>
        <div class="card-body">
            <table class="table table-content">
            <tr>
                <td>
                    Unique ID
                </td>
                <td>Name</td>
                <td>Details</td>
                <td>Status</td>
                <td>Sample Collection Date</td>
                <td>Sample Submitted</td>
                <td>Action</td>
            </tr>
            @if($backDatePending)
                @foreach($backDatePending as $todayReport)
                
                    <tr>
                        <td>
                            {!! $todayReport->unique_id !!}
                            <p>
                                {!! $todayReport->sample_collection_detail_id ? $todayReport->sampleCollectionDetail->sampleCollectedBy->name : 'SELF' !!}
                            </p>
                        </td>
                        <td>{!! $todayReport->patientInfo->name !!} ({!! $todayReport->patientInfo->mobile !!})</td>
                        <td>
                            <?php
                            $html = '';
                            if($todayReport->reportDetails)
                            {
                                foreach($todayReport->reportDetails as $details)
                                {
                                    $html .= '<p>' . $details->report_type->title . ' ('.$details->total_cost.')</p>';
                                }
                            }
                            echo $html;
                            ?>
                        </td>
                        <td>{!! getPatientReportStatus($todayReport->status) !!}</td>

                        <td>{!! getReadableDateTime($todayReport->collected_on) !!}</td>

                        <td>
                            <a onclick="acceptReport({!! $todayReport->id !!})" data-id="{!! $todayReport->id !!}" href="javascript:void(0);" class="btn btn-xs btn-primary">
                                                        Accept
                                                    </a>
                        </td>

                       
                        <td>
                            <a href="{!! route('admin.patientreport.edit', $todayReport->id) !!}"><i class="fa fa-edit"></i></a>

                            @if($todayReport->attachment)
                                <a target="_blank" href="<?= url('reports/pdf/'.$todayReport->attachment);?>" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        </div>
    </div>
    <div class="card-footer">
            <span class="float-right">Contact Number: +91 8000060541</span>
    </div>
</div>
@endsection

@section('after-scripts')
<script type="text/javascript">
    function acceptReport(reportId)
    {
        swal({
            title: "Accept Sample ?",
            text: 'By clicking you are accepting samples for reports.',
            type: "warning",
            html: true,
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, Accept.',
            cancelButtonText: "No, cancel it!",
            closeOnConfirm: false,
            closeOnCancel: false
         },
        function(isConfirm)
        {
            if(isConfirm)
            {
                jQuery.ajax(
                {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : "{{ route('admin.patientreport.acceptSample') }}",
                    data : {
                        reportId
                    },
                    type : 'POST',
                    dataType : 'json',
                    success : function(data){
                        if(data.status == true)
                        {
                            window.location.reload();
                        }

                        swal('Error!', 'Something went wrong.', 'error');
                    }
                });
            }
        });
    }

    function sendWaReport(reportId)
    {
        swal({
                title: "Send WhatsApp?",
                text: 'By clicking you are sending reports on patient whatsapp phone number.',
                type: "warning",
                html: true,
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, Send Now.',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
             },
            function(isConfirm)
            {
                if(isConfirm && isConfirm == true)
                {
                    jQuery.ajax(
                    {
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() 
                        {
                            swal.close();
                            swal('Loading...', '', 'warning');
                        },
                        url : "{{ route('admin.patientreport.sendWaReport') }}",
                        data : {
                            reportId
                        },
                        type : 'POST',
                        dataType : 'json',
                        success : function(data)
                        {
                            swal.close();
                            if(data.status == true)
                            {
                                window.location.reload();
                                return;
                            }

                            swal('Error!', 'Something went wrong.', 'error');
                        }
                    });
                }
                else
                {
                    swal.close();
                }
            })

    }
</script>
    
@endsection
