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
                                REPORTS 
                            </div>
                        </div>
                            <div class="card-body">
                            <table class="table table-content">
                                <tr>
                                    <td>
                                        Unique ID
                                    </td>
                                    <td>Name</td>
                                    <td>Mobile</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                                @if($todayReports)
                                    @foreach($todayReports as $todayReport)
                                        @php
                                            $reportHashId = hasher()->encode($todayReport->id);
                                        @endphp
                                        <tr>
                                            <td>
                                                {!! $todayReport->unique_id !!}
                                            </td>
                                            <td>
                                                @if($todayReport->patientInfo)
                                                    {!! $todayReport->patientInfo->name !!}
                                                @endif
                                            </td>
                                            <td>
                                                {!! $todayReport->patientInfo->mobile !!}
                                            </td>
                                            <td>
                                                @if($todayReport->is_approved == 1)
                                                    Approved
                                                @elseif($todayReport->is_approved == 2)
                                                    Rejected
                                                @else
                                                    Waiting for Approval
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{!! route('admin.patientreport.edit', $todayReport->id) !!}"><i class="fa fa-edit"></i></a>

                                                @if($todayReport->attachment)
                                                    <a target="_blank" href="<?= url('reports/pdf/'.$todayReport->attachment);?>" class="btn btn-xs btn-primary"><i class="fa fa-download" data-toggle="tooltip" data-placement="top" title="Download"></i></a>

                                                    @if($todayReport->is_approved && $todayReport->is_approved == 1)
                                                        <a  onclick="sendWaReport('<?= $reportHashId;?>')" href="javascript:void(0);" class="btn btn-xs btn-primary"><i class="fa fa-paper-plane" data-toggle="tooltip" data-placement="top" title="Send"></i></a>     
                                                    @endif
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
