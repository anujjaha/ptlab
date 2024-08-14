@extends ('backend.layouts.app')

@section ('title', isset($repository->moduleTitle) ? $repository->moduleTitle. ' Management' : 'Management')

@include('backend.includes.datatable-asset')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ isset($repository->moduleTitle) ? str_plural($repository->moduleTitle) : '' }} Listing
        </h3>
        <div class="card-tools">
            @php

            /*
            @include('common.'.strtolower($repository->moduleTitle).'.header-buttons', ['createRoute' =>
            $repository->getActionRoute('createRoute')])
            */
            @endphp
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="items-table" class="table table-bordered table-hover">
                <thead>
                    <tr id="tableHeadersContainer"></tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('after-scripts')
<script type="text/javascript">
var headers = JSON.parse('{!! $repository->getTableHeaders() !!}'),
    columns = JSON.parse('{!! $repository->getTableColumns() !!}'),
    moduleConfig = {
        getTableDataUrl: '{!! route($repository->getActionRoute("dataRoute")) !!}'
    };

jQuery(document).ready(function() {
    BaseCommon.Utils.setTableHeaders(document.getElementById("tableHeadersContainer"), headers);
    BaseCommon.Utils.setTableColumns(document.getElementById("items-table"), moduleConfig.getTableDataUrl,
        'GET', columns);
});

jQuery(document).ready(function() {
    bindUploadReport();
});

function bindUploadReport()
{
    jQuery(document).on('click','.upload-report',function(e)
    {
        console.log(e.target);
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