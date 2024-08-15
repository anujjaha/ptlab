@extends ('backend.layouts.app')

@section ('title', isset($repository->moduleTitle) ? 'Edit - '. $repository->moduleTitle : 'Edit')

@section('page-header')
<h1>
    {{$repository->moduleTitle}}
    <small>Edit</small>
</h1>
@endsection

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<link
  rel="stylesheet"
  href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css"
  type="text/css"
/>
{{ Form::model($item, ['route' => [$repository->getActionRoute('updateRoute'), $item], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $repository->moduleTitle }}</h3>
        @php
            $hideOptions = 'display: none;';
        @endphp
        @if(!in_array($item->status, [0,1]))
            @php
                $hideOptions = '';
            @endphp
        @endif

        <div class="card-tools">
            <div class="pull-right mb-10 hidden-sm hidden-xs">
                <a style="<?= $hideOptions;?>" target="_blank" href="{!! url('reports/pdf/'.$item->attachment)!!}" class="default-hide btn btn-primary btn-xs pull-right">Download</a>
                <a style="<?= $hideOptions;?>" onclick="sendWaReport('<?= hasher()->encode($item->id);?>')" href="javascript:void(0);" class="default-hide btn btn-xs btn-primary"><i class="fa fa-paper-plane" data-toggle="tooltip" data-placement="top" title="Send"></i></a>
            </div>
        </div>
       
    </div>

    <div class="card-body">
         @if(in_array($item->status, [0,1]))
        <div class="card-tools pull-right">
            <div id="dropZoneContainer">
               <div style="min-height: 50px !important;" class="dropzone" id="dropzone_field"></div>
               <center>
               <a href="javascript:void(0);" onclick="uploadReportBtn()" class="m-2 btn-xs btn btn-success">
               Upload</a>
               </center>
               <hr />
               <div class="clearfix"></div>
            </div>
        </div>
        @endif

        {{-- Module Form --}}
        @include('common.'.strtolower($repository->moduleTitle).'.form')
    </div>

    <div class="card-footer">
        <div class="card-tools text-right">
            {{ Form::submit('Update', ['class' => 'btn btn-success btn-xs']) }}
            {{ link_to_route($repository->getActionRoute('listRoute'), 'Cancel', [], ['class' => 'btn btn-danger btn-xs']) }}
        </div>
        <div class="clearfix"></div>
    </div>
</div>
{{ Form::close() }}
@endsection

@section('after-scripts')
<script>
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#dropzone_field", {
            url: "@php echo route('admin.patientreport.upload', $item->id) @endphp",
            autoProcessQueue: false,
            dictDefaultMessage: "Upload your Report PDF file here",
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            parallelUploads: 1,
            uploadMultiple: false,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                if(response.status == true)
                {
                    $("#uploaded-files").val(response.name);
                }
            }
        });
       
        function uploadReportBtn()
        {
            if(myDropzone.files.length > 0)
            {

                swal({
                    title: "Please Confirm!",
                    text: 'Report can not be deleted once uploaded for the patient.',
                    type: "warning",
                    html: true,
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, Lets Upload!',
                    cancelButtonText: "No, cancel it!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                 },
                 function(isConfirm)
                 {
                    if (isConfirm && isConfirm == true)
                    {
                        myDropzone.processQueue();

                        myDropzone.on("queuecomplete", function (file) {
                            swal("Yeah!", "Report uploaded successfully.", "success");
                            $("#dropZoneContainer").hide();
                            window.location.reload();
                        });
                    }
                    else
                    {
                        swal.close();
                    }
                 });
            }
            else
            {
                swal('Error!', "Please select/uplaod report file", 'error');
            }
            
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


    <input type="hidden" name="isfileUploaded"  id="isfileUploaded"  value="0">
@endsection