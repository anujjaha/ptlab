<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Basic Information
                </div>
            </div>
            <div class="card-body">
                <table class="table table-border" > 
                    <tr>
                        <td>
                            Name: {!! $item->patientInfo->name !!}
                        </td>
                        <td>
                            Mobile: {!! $item->patientInfo->mobile !!}
                        </td>
                        <td>
                            WhatssApp: {!! $item->patientInfo->is_wa ? 'Yes' : 'No' !!}
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>


    @if($item->is_approved == 2)
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">
                        Upload New Report
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-tools pull-right">
                        <div id="dropZoneContainer">
                           <div style="min-height: 50px !important;" class="dropzone" id="dropzone_field"></div>
                           <center>
                           <a href="javascript:void(0);" onclick="uploadReportBtn(1)" class="m-2 btn-xs btn btn-success">
                           Upload</a>
                           </center>
                           <hr />
                           <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                REPORT VIEW
                @if($item->is_approved == 0)
                    @if(canApproveReports())
                    <span class="pull-right float-right">
                        <a onclick="changeReportStatus('1')" class="btn btn-sm btn-success" href="javascript:void(0);">Approved</a>
                        <a  onclick="changeReportStatus('0')" class="btn btn-sm btn-danger" href="javascript:void(0);">Rejected</a>
                    </span>
                    @endif
                @else
                    <span class="pull-right float-right">{!! $item->is_approved == 1 ? 'Approved' .  'At '. date('M d Y h:i a', strtotime($item->is_approved_at))  : 'Rejected' !!}</span>
                @endif
            </div>
        </div>
        <div class="card-body">
                <iframe src="{!!  url('reports/pdf/'.$item->attachment) !!}" width="940" height="600"></iframe>
        </div>
        </div>
    </div>
</div>
<input type="hidden" name="reportId" id="reportId" value="{!! $item->id !!}">
