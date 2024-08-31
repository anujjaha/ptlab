@extends ('backend.layouts.app')

@section ('title', isset($repository->moduleTitle) ? 'Create - '. $repository->moduleTitle : 'Create')

@section('page-header')
<h1>
    {{ isset($repository->moduleTitle) ? $repository->moduleTitle : '' }}
    <small>Create</small>
</h1>
@endsection

@section('content')



{{ Form::open([
        'name'      => 'patien-report',
        'id'        => 'patien-report',
        'route'     => $repository->getActionRoute('storeRoute'),
        'class'     => 'form-horizontal',
        'role'      => 'form',
        'method'    => 'post',
    ])}}

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create {{ isset($repository->moduleTitle) ? $repository->moduleTitle : '' }}</h3>

        <div class="card-tools pull-right">
            @include('common.'.strtolower($repository->moduleTitle).'.header-buttons', [
            'listRoute' => $repository->getActionRoute('listRoute'),
            'createRoute' => $repository->getActionRoute('createRoute')
            ])
        </div>
    </div>

    <div class="card-body">
        {{-- Module Form --}}
        @include('common.'.strtolower($repository->moduleTitle).'.form')
    </div>

    <div class="card-footer">
        <div class="card-tools text-right">
            <a href="javascript:void(0);" onclick="confirmForm();" class="btn btn-success btn-xs">Save</a> 
            {{ link_to_route($repository->getActionRoute('listRoute'), 'Cancel', [], ['class' => 'btn btn-danger btn-xs']) }}
        </div>
        <div class="clearfix"></div>
    </div>
</div>
{{ Form::close() }}

<script type="text/javascript">
    function confirmForm()
    {
        if(validateForm())
        {
            var total = 0;
            var html  = '<ul>';

            jQuery('.report_type:checkbox:checked').each(function () {
                if(this.checked)
                {
                    html +=  '<li>' + $(this).attr('data-title') + ' - ' + $(this).attr('data-cost') + '</li>';
                    total = total + parseFloat($(this).attr('data-cost'));
                }
            });

            html += '<li>Total: '+total+'</li></ul>';

            swal({
                title: "Please Confirm",
                text: html,
                type: "warning",
                html: true,
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
             },
             function(isConfirm)
             {
               if (isConfirm){
                 swal("Yeah!", "Reports locked successfully.", "success");
                 setTimeout(function() {
                    $("#patien-report").submit();
                 }, 1000);
                } else {
                  swal("Cancelled", "Please Try Again :)", "error");
                  return false;
                }
             });
        }

    }

    function validateForm()
    {
        if($("#name").val().length < 1)
        {
            swal('Oh!', 'Please enter valid Name', 'error');
            $("#name").focus();
            return false;
        }

        if($("#age").val().length < 1)
        {
            swal('Oh!', 'Please enter valid Age', 'error');
            $("#age").focus();
            return false;
        }

        if($("#mobile").val().length < 1)
        {
            swal('Oh!', 'Please enter valid mobile', 'error');
            $("#mobile").focus();
            return false;
        }
        
        if($("#gender").val().length < 1)
        {
            swal('Oh!', 'Please select valid Gender', 'error');
            return false;
        }

        return true;
    }


    function manageCollectorOpt()
    {
        jQuery("#collectorContainer").hide();

        if(jQuery("#collect_sample").val() == 1)
        {
            jQuery("#collectorContainer").show();
        }
    }


    
</script>
@endsection

@section('after-scripts')
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#collected_at").datetimepicker()
    })

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#dropzone_field", {
        url: "@php echo route('admin.patientreport.upload', 1) @endphp",
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

    myDropzone.on('sending', function(file, xhr, formData){
        formData.append('name', jQuery("#name").val());
        formData.append('mobile', jQuery("#mobile").val());
        formData.append('is_wa', jQuery("#is_wa").val());
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
                    if(jQuery("#name").val().length < 1)
                    {
                        swal("OH!", "Please add Patient Name.", "error");
                        return false;
                    }

                    if(jQuery("#mobile").val().length < 1)
                    {
                        swal("OH!", "Please add Mobile Number.", "error");
                        return false;
                    }

                    if(jQuery("#is_wa").val() == '')
                    {
                        swal("OH!", "Please select WhatsApp.", "error");
                        return false;
                    }

                    myDropzone.processQueue();

                    myDropzone.on("queuecomplete", function (file) {
                        swal("Yeah!", "Report uploaded successfully.", "success");
                        $("#dropZoneContainer").hide();
                        //window.location.reload();
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

